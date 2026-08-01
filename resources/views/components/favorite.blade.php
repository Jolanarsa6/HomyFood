@auth
    <!-- نمرر حالة المنتج الابتدائية من الخادم (هل هو في المفضلة أم لا؟) -->
    <div x-data="{ 
            isFav: {{ auth()->user()->favorites->contains($product->id) ? 'true' : 'false' }},
            loading: false 
         }" 
         class="inline-block">
        
        <button @click="
                if(loading) return;
                loading = true;
                // تغيير اللون بالفرونت إند فوراً لتجربة مستخدم سريعة
                isFav = !isFav; 
                
                // إرسال الطلب للخلفية لتحديث قاعدة البيانات
                axios.post('/favorites/toggle/{{ $product->id }}')
                    .then(response => {
                        isFav = response.data.is_favorite;
                    })
                    .catch(error => {
                        // في حال حدث خطأ، نعيد الأيقونة لحالتها السابقة
                        isFav = !isFav;
                        alert('حدث خطأ ما، يرجى المحاولة لاحقاً');
                    })
                    .finally(() => loading = false);
            "
            type="button"
            class="p-2 rounded-full transition-all duration-300 transform active:scale-95 focus:outline-none"
            :class="isFav ? 'text-homy-green-700 dark:text-homy-gold-400' : 'text-slate-400 dark:text-slate-500 hover:text-homy-green-600 dark:hover:text-homy-gold-200'"
            title="المفضلة">
            
            <!-- تغيير كلاس الأيقونة ديناميكياً بين قلب ممتلئ وقلب مفرغ -->
            <i :class="isFav ? 'fa-solid fa-heart' : 'fa-regular fa-heart'" class="text-xl transition-transform duration-300"></i>
            
        </button>
    </div>
@else
    <!-- إذا كان الزائر غير مسجل دخول، يتم توجيهه لصفحة تسجيل الدخول عند الضغط -->
    <a href="{{ route('login') }}" class="p-2 text-slate-400 dark:text-slate-500 hover:text-homy-green-600 dark:hover:text-homy-gold-200 inline-block">
        <i class="fa-regular fa-heart text-xl"></i>
    </a>
@endauth
