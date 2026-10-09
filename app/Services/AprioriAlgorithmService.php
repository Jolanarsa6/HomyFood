<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AprioriAlgorithmService
{
    /**
     * أوزان الخوارزمية (Weights).
     * مجموع هذه الأوزان يمثل الأهمية النسبية لكل عامل في حساب النقاط.
     * يمكن تعديلها لاحقاً بواسطة الذكاء الاصطناعي، لكن حالياً نضبطها يدوياً.
     */
    private const WEIGHT_CART = 0.50;     // 50% لمحتوى السلة (الأكثر أهمية)
    private const WEIGHT_LOCATION = 0.30; // 30% للموقع الجغرافي
    private const WEIGHT_SEASON = 0.20;   // 20% للموسم الحالي

    /**
     * الحصول على المنتجات المقترحة لمستخدم معين.
     *
     * @param User $user المستخدم الحالي
     * @param int $limit عدد المنتجات المطلوبة للإرجاع
     * @return \Illuminate\Support\Collection
     */
    public function getPersonalizedRecommendations(User $user, int $limit = 10)
    {
        // 1. جلب سياق المستخدم (User Context)
        $userCity = $user->profile->city ?? null;
        $currentMonth = Carbon::now()->month;

        // جلب معرفات التصنيفات الموجودة حالياً في سلة المستخدم
        $cartCategoryIds = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.product_id')
            ->join('product_category', 'products.product_id', '=', 'product_category.product_id')
            ->where('cart.user_id', $user->user_id)
            ->pluck('product_category.category_id')
            ->unique()
            ->toArray();

        // جلب جميع المنتجات المتاحة للبيع لتقييمها (مع تجنب المنتجات الموجودة بالفعل في السلة)
        $cartProductIds = DB::table('cart')
            ->where('user_id', $user->user_id)
            ->pluck('product_id')
            ->toArray();

        $candidates = Product::whereNotIn('product_id', $cartProductIds)
            ->where('available_quantity', '>', 0)
            ->with(['categories']) // نفترض وجود علاقة categories في موديل Product
            ->get();

        // جلب المنتجات الأكثر مبيعاً في مدينة المستخدم
        $topInCityProductIds = [];
        if ($userCity) {
            $topInCityProductIds = DB::table('orders')
                ->join('profiles', 'orders.user_id', '=', 'profiles.user_id')
                ->join('order_items', 'orders.order_id', '=', 'order_items.order_id')
                ->where('profiles.city', $userCity)
                ->select('order_items.product_id', DB::raw('SUM(order_items.quantity) as total_sold'))
                ->groupBy('order_items.product_id')
                ->orderByDesc('total_sold')
                ->limit(20)
                ->pluck('product_id')
                ->toArray();
        }

        $scoredProducts = collect();

        foreach ($candidates as $product) {
            $score = 0;

            // 1. حساب نقاط السلة (Cart Match Score) - التشابه المعتمد على المحتوى
            // إذا كان المنتج ينتمي لنفس تصنيفات المنتجات الموجودة في السلة، يحصل على نقاط
            $productCategoryIds = $product->categories->pluck('category_id')->toArray();
            $commonCategories = array_intersect($cartCategoryIds, $productCategoryIds);

            if (count($commonCategories) > 0) {
                // يعطى علامة كاملة للوزن المخصص للسلة
                $score += self::WEIGHT_CART * 100;
            }

            // 2. حساب نقاط الموقع الجغرافي (Location Match Score) - التصفية التعاونية المكانية
            if (in_array($product->product_id, $topInCityProductIds)) {
                $score += self::WEIGHT_LOCATION * 100;
            }

            // 3. حساب نقاط الموسمية (Seasonality Score)
            // بناءً على تاريخ الإنتاج أو جدول مخصص للمواسم. 
            // سنفترض هنا أننا نتحقق من شهر الإنتاج إذا كان في نفس الربع السنوي
            $productionMonth = Carbon::parse($product->production_date)->month;
            if ($this->isSameSeason($currentMonth, $productionMonth)) {
                $score += self::WEIGHT_SEASON * 100;
            }

            // إضافة نقاط إضافية بناءً على التقييم العام للمنتج (لتعزيز جودة الاقتراحات)
            // إذا كان التقييم 5 نجوم يضاف 10 نقاط للسكور النهائي
            $averageRating = $this->getProductAverageRating($product->product_id);
            $score += ($averageRating * 2);

            // تخزين المنتج مع مجموع نقاطه فقط إذا تجاوز حداً أدنى من النقاط (مثلاً > 0)
            if ($score > 0) {
                $product->recommendation_score = $score;
                $scoredProducts->push($product);
            }
        }

        // ترتيب المنتجات تنازلياً حسب النقاط المكتسبة، وإرجاع العدد المطلوب
        return $scoredProducts->sortByDesc('recommendation_score')
            ->take($limit)
            ->values();
    }

    /**
     * دالة مساعدة لتحديد ما إذا كان الشهران يقعان في نفس الموسم الزراعي.
     */
    private function isSameSeason(int $month1, int $month2): bool
    {
        $seasons = [
            'winter' => [12, 1, 2],
            'spring' => [3, 4, 5],
            'summer' => [6, 7, 8],
            'autumn' => [9, 10, 11],
        ];

        $season1 = '';
        $season2 = '';

        foreach ($seasons as $name => $months) {
            if (in_array($month1, $months)) $season1 = $name;
            if (in_array($month2, $months)) $season2 = $name;
        }

        return $season1 === $season2;
    }

    /**
     * دالة مساعدة لجلب متوسط تقييم المنتج.
     */
    private function getProductAverageRating(int $productId): float
    {
        return (float) DB::table('rate')
            ->where('product_id', $productId)
            ->avg('number') ?? 0;
    }
}
