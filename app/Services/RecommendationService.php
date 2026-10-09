<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

/**
 * يجلب البيانات من جداول المخطط ويستدعي ProductRecommender.
 * عدّل أسماء الجداول والأعمدة لتطابق migrations الفعلية عندك
 * (المخطط يكتب Product/Orders بصيغة المفرد، ولارافيل عادةً يستخدم الجمع).
 *
 * يفترض إضافة:  products.season_start / season_end  (tinyint، nullable)
 *               categories.parent_id                 (nullable)
 */
class RecommendationService
{
    public function forUser(int $userId, int $topN = 10): array
    {
        // 1) كل المنتجات (لبناء ملف الزبون)، مع فئة واحدة لكل منتج.
        //    المنتج متعدد الفئات يُختزل هنا إلى أصغر category_id؛ بدّله بفئة رئيسية إن أضفتها.
        $products = DB::table('products as p')
            ->leftJoin('product_category as pc', 'pc.product_id', '=', 'p.product_id')
            ->selectRaw('p.product_id, p.product_ar_name, p.season_start, p.season_end, MIN(pc.category_id) AS category_id')
            ->groupBy('p.product_id', 'p.product_ar_name', 'p.season_start', 'p.season_end')
            ->get()
            ->map(fn ($r) => (array) $r)
            ->all();

        // 2) المنتجات المؤهلة للعرض: متوفرة، غير منتهية، وليست للزبون نفسه
        $eligibleIds = DB::table('products')
            ->where('available_quantity', '>', 0)
            ->where(fn ($q) => $q->whereNull('expiry_date')->orWhere('expiry_date', '>=', now()->toDateString()))
            ->where('user_id', '!=', $userId)
            ->pluck('product_id')
            ->all();

        // 3) مشتريات هذا الزبون فقط، من الطلبات المكتملة (عدّل قيمة الحالة حسب الـ enum)
        $purchases = DB::table('orders as o')
            ->join('order_items as oi', 'oi.order_id', '=', 'o.order_id')
            ->where('o.user_id', $userId)
            ->where('o.status', 'delivered')
            ->select('o.user_id', 'oi.product_id', 'o.created_at as purchased_at')
            ->get()
            ->map(fn ($r) => (array) $r)
            ->all();

        // 4) مجموعات الفئات (category_id => parent_id)
        $groups = DB::table('categories')
            ->whereNotNull('parent_id')
            ->pluck('parent_id', 'category_id')
            ->all();

        $ranked = (new ProductRecommender($groups))
            ->recommend($userId, $products, $purchases, now(), $topN, $eligibleIds);

        return array_map(fn ($r) => [
            'product_id' => $r['product']['product_id'],
            'score'      => $r['score'],
        ], $ranked);
    }
}
