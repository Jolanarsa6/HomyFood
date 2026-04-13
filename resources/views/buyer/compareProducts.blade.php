<div class="min-h-screen bg-gray-50 font-['Cairo'] py-12 px-4" dir="rtl">

    <header class="max-w-6xl mx-auto text-center mb-16">
        <h1 class="text-4xl font-black text-homy-green-700 mb-4">قارن بين النكهات</h1>
        <p class="text-gray-500 max-w-lg mx-auto">اختر منتجين من قائمتنا الفاخرة لنساعدك في اختيار المذاق الذي
            يناسب ذوقك الرفيع.</p>
    </header>

    <div class="max-w-5xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 relative">
            <div
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20 hidden md:flex w-14 h-14 bg-homy-gold-500 text-white rounded-full items-center justify-center font-black shadow-xl border-4 border-white">
                VS
            </div>

            <div id="slot-1" class="relative group cursor-pointer">
                <div onclick="openProductModal(1)" id="empty-1"
                    class="h-80 border-4 border-dashed border-gray-200 rounded-[2.5rem] flex flex-col items-center justify-center text-gray-300 hover:border-homy-gold-500 hover:text-homy-gold-500 hover:bg-homy-gold-50/30 transition-all duration-500">
                    <div
                        class="w-20 h-20 rounded-full bg-white shadow-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-plus text-3xl"></i>
                    </div>
                    <span class="font-black text-xl">أضف منتجاً</span>
                </div>
                <div id="selected-1"
                    class="hidden h-80 bg-white rounded-[2.5rem] shadow-2xl shadow-homy-green-100/20 overflow-hidden border border-gray-100 relative">
                    <button onclick="resetSlot(1)"
                        class="absolute top-4 right-4 z-10 w-8 h-8 bg-red-500 text-white rounded-full text-xs hover:scale-110 transition-transform"><i
                            class="fas fa-times"></i></button>
                    <img id="img-1" src="" class="w-full h-full object-cover">
                    <div
                        class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/80 to-transparent text-white">
                        <h4 id="name-1" class="font-black text-xl"></h4>
                    </div>
                </div>
            </div>

            <div id="slot-2" class="relative group cursor-pointer">
                <div onclick="openProductModal(2)" id="empty-2"
                    class="h-80 border-4 border-dashed border-gray-200 rounded-[2.5rem] flex flex-col items-center justify-center text-gray-300 hover:border-homy-gold-500 hover:text-homy-gold-500 hover:bg-homy-gold-50/30 transition-all duration-500">
                    <div
                        class="w-20 h-20 rounded-full bg-white shadow-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-plus text-3xl"></i>
                    </div>
                    <span class="font-black text-xl">أضف منتجاً</span>
                </div>
                <div id="selected-2"
                    class="hidden h-80 bg-white rounded-[2.5rem] shadow-2xl shadow-homy-green-100/20 overflow-hidden border border-gray-100 relative">
                    <button onclick="resetSlot(2)"
                        class="absolute top-4 right-4 z-10 w-8 h-8 bg-red-500 text-white rounded-full text-xs hover:scale-110 transition-transform"><i
                            class="fas fa-times"></i></button>
                    <img id="img-2" src="" class="w-full h-full object-cover">
                    <div
                        class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/80 to-transparent text-white">
                        <h4 id="name-2" class="font-black text-xl"></h4>
                    </div>
                </div>
            </div>
        </div>

        <div id="comparison-table" class="hidden animate-fade-in">
            <div
                class="bg-white rounded-[2.5rem] shadow-2xl shadow-homy-green-100/20 overflow-hidden border border-gray-100">
                <table class="w-full text-center border-collapse">
                    <thead>
                        <tr class="bg-homy-green-700 text-white">
                            <th class="py-6 px-4 font-black">الخاصية</th>
                            <th class="py-6 px-4 font-black border-x border-white/10" id="table-head-1">المنتج
                                الأول</th>
                            <th class="py-6 px-4 font-black" id="table-head-2">المنتج الثاني</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-6 px-4 font-bold text-gray-400">السعر</td>
                            <td class="py-6 px-4 font-black text-homy-green-700 text-xl" id="price-1">-</td>
                            <td class="py-6 px-4 font-black text-homy-green-700 text-xl" id="price-2">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-6 px-4 font-bold text-gray-400">التقييم</td>
                            <td class="py-6 px-4" id="rating-1">-</td>
                            <td class="py-6 px-4" id="rating-2">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-6 px-4 font-bold text-gray-400">التغليف</td>
                            <td class="py-6 px-4 text-gray-700 font-bold" id="package-1">-</td>
                            <td class="py-6 px-4 text-gray-700 font-bold" id="package-2">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-6 px-4 font-bold text-gray-400">المكونات الرئيسية</td>
                            <td class="py-6  text-sm text-gray-600 leading-relaxed px-8" id="ingredients-1">-
                            </td>
                            <td class="py-6  text-sm text-gray-600 leading-relaxed px-8" id="ingredients-2">-
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-8 flex justify-center gap-4">
                <button
                    class="px-10 py-4 bg-homy-gold-500 text-white rounded-2xl font-black shadow-lg shadow-homy-gold-100 hover:scale-105 transition-transform">أضف
                    كلاهما للسلة</button>
            </div>
        </div>
    </div>

    <div id="product-modal"
        class="fixed inset-0 bg-homy-green-900/60 backdrop-blur-sm z-[100] hidden items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-[3rem] shadow-2xl overflow-hidden animate-slide-up">
            <div class="p-8 border-b border-gray-100 flex justify-between items-center">
                <h3 class="text-2xl font-black text-homy-green-700">اختر المنتج</h3>
                <button onclick="closeProductModal()" class="text-gray-400 hover:text-red-500 transition-colors"><i
                        class="fas fa-times text-xl"></i></button>
            </div>
            <div class="p-8 max-h-[60vh] overflow-y-auto grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div onclick="selectProduct({id:1, name:'مربى تين ملكي', price:'45 ر.س', rating:'4.9', package:'زجاجي فاخر', ingredients:'تين طازج، سكر قليل، جوز لوزي', img:'https://images.unsplash.com/photo-1590779033100-9f60705a013d?auto=format&fit=crop&w=400'})"
                    class="p-4 border border-gray-100 rounded-3xl flex items-center gap-4 hover:bg-homy-gold-50 hover:border-homy-gold-500 cursor-pointer transition-all group">
                    <img src="https://images.unsplash.com/photo-1590779033100-9f60705a013d?auto=format&fit=crop&w=400"
                        class="w-16 h-16 rounded-xl object-cover">
                    <div>
                        <p class="font-bold text-homy-green-700 group-hover:text-homy-gold-600">مربى تين ملكي
                        </p>
                        <p class="text-xs text-gray-400">45 ر.س</p>
                    </div>
                </div>

                <div onclick="selectProduct({id:2, name:'مكدوس باذنجان', price:'60 ر.س', rating:'4.8', package:'مرطبان معقم', ingredients:'باذنجان، زيت زيتون بكر، جوز، فليفلة', img:'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=400'})"
                    class="p-4 border border-gray-100 rounded-3xl flex items-center gap-4 hover:bg-homy-gold-50 hover:border-homy-gold-500 cursor-pointer transition-all group">
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=400"
                        class="w-16 h-16 rounded-xl object-cover">
                    <div>
                        <p class="font-bold text-homy-green-700 group-hover:text-homy-gold-600">مكدوس باذنجان
                        </p>
                        <p class="text-xs text-gray-400">60 ر.س</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
