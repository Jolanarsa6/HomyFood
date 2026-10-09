<?php

namespace App\Services;

use DateTimeImmutable;
use DateTimeInterface;

/**
 * محرك ترتيب المنتجات للمشتري (Top-N) — ترجمة لنسخة بايثون.
 * منطق صرف بلا قاعدة بيانات: يستقبل مصفوفات ويعيد مصفوفة مرتّبة.
 * يتطلب PHP 8.0 أو أحدث.
 *
 * شكل المنتج:   ['product_id', 'product_ar_name', 'category_id', 'season_start', 'season_end']
 * شكل الشراء:   ['user_id', 'product_id', 'purchased_at']   (purchased_at = orders.created_at)
 */
class ProductRecommenderService
{
    public const WEIGHTS = ['purchase' => 0.45, 'season' => 0.30, 'category' => 0.25];

    public const HALF_LIFE_DAYS   = 90;   // مشتريات عمرها 90 يوماً يقل وزنها للنصف
    public const SEASON_LOOKAHEAD = 2;    // نقاط جزئية لمنتج يبدأ موسمه خلال شهرين
    public const SIBLING_FACTOR   = 0.5;  // وزن الفئة الشقيقة مقارنة بنفس الفئة
    public const NEUTRAL_SEASON   = 0.5;  // قيمة الموسم للمنتج المتوفر طوال السنة

    /** @var array<int|string, int|string> category_id => group_id (مثلاً من Categories.parent_id) */
    private array $categoryGroup;

    public function __construct(array $categoryGroup = [])
    {
        $this->categoryGroup = $categoryGroup;
    }

    /**
     * @param int|string          $userId
     * @param array[]             $products     كل منتجات المتجر (تُستخدم لبناء ملف الزبون والتطبيع)
     * @param array[]             $purchases    مشتريات الزبون
     * @param ?array              $eligibleIds  إن وُجد: تُرتَّب هذه المنتجات فقط (متوفر/غير منتهٍ/ليس منتج الزبون نفسه)
     */
    public function recommend(
        $userId,
        array $products,
        array $purchases,
        $today = null,
        int $topN = 10,
        ?array $eligibleIds = null
    ): array {
        $today = $this->toDate($today ?? 'today');

        $productsById = [];
        foreach ($products as $p) {
            $productsById[$p['product_id']] = $p;
        }

        [$perProduct, $perCategory] = $this->buildProfile($userId, $purchases, $productsById, $today);

        // زبون جديد بلا تاريخ شراء: نعتمد على الموسم وحده
        $weights = $perProduct
            ? self::WEIGHTS
            : ['purchase' => 0.0, 'season' => 1.0, 'category' => 0.0];

        // تطبيع الفئات: نقسم على أعلى قرب بين كل فئات المتجر ليصبح الناتج بين 0 و1
        $affinities = [];
        foreach ($products as $p) {
            $c = $p['category_id'] ?? null;
            if ($c !== null && !array_key_exists($c, $affinities)) {
                $affinities[$c] = $this->categoryAffinity($c, $perCategory);
            }
        }
        $maxAff = $affinities ? max($affinities) : 0.0;

        $eligible = $eligibleIds !== null ? array_flip($eligibleIds) : null;

        $results = [];
        foreach ($products as $p) {
            if ($eligible !== null && !isset($eligible[$p['product_id']])) {
                continue;
            }
            $c = $p['category_id'] ?? null;
            $parts = [
                'purchase' => $this->purchaseScore($p, $perProduct),
                'season'   => $this->seasonScore($p, $today),
                'category' => ($c !== null && $maxAff > 0) ? $affinities[$c] / $maxAff : 0.0,
            ];
            $total = 0.0;
            foreach ($parts as $k => $v) {
                $total += $weights[$k] * $v;
            }
            $results[] = ['product' => $p, 'score' => round($total, 4), 'parts' => $parts];
        }

        // تنازلي بالنقاط، وعند التساوي بالمعرّف ليكون الناتج ثابتاً
        usort($results, fn ($a, $b) =>
            [$b['score'], $a['product']['product_id']] <=> [$a['score'], $b['product']['product_id']]
        );

        return array_slice($results, 0, $topN);
    }

    // ---------- عامل الموسم ----------
    private function inSeason(int $month, int $start, int $end): bool
    {
        if ($start <= $end) {
            return $start <= $month && $month <= $end;
        }
        return $month >= $start || $month <= $end; // موسم يعبر رأس السنة
    }

    private function seasonScore(array $p, DateTimeImmutable $today): float
    {
        $start = $p['season_start'] ?? null;
        $end   = $p['season_end'] ?? null;
        if ($start === null || $end === null) {
            return self::NEUTRAL_SEASON;
        }
        $month = (int) $today->format('n');
        if ($this->inSeason($month, (int) $start, (int) $end)) {
            return 1.0;
        }
        $monthsUntil = ((((int) $start - $month) % 12) + 12) % 12; // % في PHP قد يعطي سالباً
        if ($monthsUntil <= self::SEASON_LOOKAHEAD) {
            return 1.0 - $monthsUntil / (self::SEASON_LOOKAHEAD + 1);
        }
        return 0.0;
    }

    // ---------- ملف الزبون ----------
    private function buildProfile($userId, array $purchases, array $productsById, DateTimeImmutable $today): array
    {
        $perProduct = [];
        $perCategory = [];
        foreach ($purchases as $pu) {
            if ((string) $pu['user_id'] !== (string) $userId || !isset($productsById[$pu['product_id']])) {
                continue;
            }
            $date = $this->toDate($pu['purchased_at']);
            $diff = $date->diff($today);
            $ageDays = $diff->invert ? 0 : $diff->days;
            $weight = 0.5 ** ($ageDays / self::HALF_LIFE_DAYS);

            $pid = $pu['product_id'];
            $perProduct[$pid] = ($perProduct[$pid] ?? 0.0) + $weight;

            $cat = $productsById[$pid]['category_id'] ?? null;
            if ($cat !== null) {
                $perCategory[$cat] = ($perCategory[$cat] ?? 0.0) + $weight;
            }
        }
        return [$perProduct, $perCategory];
    }

    private function purchaseScore(array $p, array $perProduct): float
    {
        if (!$perProduct) {
            return 0.0;
        }
        return ($perProduct[$p['product_id']] ?? 0.0) / max($perProduct);
    }

    // ---------- عامل الفئة ----------
    private function categoryAffinity($category, array $perCategory): float
    {
        $group = $this->categoryGroup[$category] ?? null;
        $same = $perCategory[$category] ?? 0.0;
        $siblings = 0.0;
        foreach ($perCategory as $c => $w) {
            if ((string) $c !== (string) $category
                && $group !== null
                && ($this->categoryGroup[$c] ?? null) === $group) {
                $siblings += $w;
            }
        }
        return $same + self::SIBLING_FACTOR * $siblings;
    }

    private function toDate($value): DateTimeImmutable
    {
        $d = $value instanceof DateTimeInterface
            ? DateTimeImmutable::createFromInterface($value)
            : new DateTimeImmutable((string) $value);
        return $d->setTime(0, 0);
    }
}
