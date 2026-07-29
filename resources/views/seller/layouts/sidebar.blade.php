      @php
          $active_link =
              'flex items-center gap-3 rounded-xl border border-homy-gold-200 bg-homy-gold-50 px-3 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/35 dark:text-homy-gold-300';
          $inactive_link =
              'flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25';
      @endphp

      <div class="mb-6 flex items-center justify-between lg:mb-4">
          <h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قائمة
                  البائع</span><span class="lang-en">Seller Menu</span></h2>
          <button id="closeSidebar"
              class="h-9 w-9 rounded-xl border border-homy-gold-200 text-homy-green-700 lg:hidden dark:border-homy-gold-600/35 dark:text-homy-gold-300"><i
                  class="fa-solid fa-xmark"></i></button>
      </div>
      <nav class="space-y-2 text-sm font-bold">
          <a href="{{ route('seller.dashboard') }}"
              class="{{ $inactive_link }} {{ request()->routeIs('seller.dashboard') ? $active_link : $inactive_link }}"><i
                  class="fa-solid fa-grid-2"></i><span class="lang-ar">الرئيسية</span><span
                  class="lang-en">Dashboard</span></a>
          <a href="{{ route('seller.addProduct') }}"
              class="{{ $inactive_link }} {{ request()->routeIs('seller.addProduct') ? $active_link : $inactive_link }}"><i
                  class="fa-solid fa-plus"></i><span class="lang-ar">إضافة منتج</span><span class="lang-en">Add
                  Product</span></a>
          {{-- <a href="products.html"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i
                        class="fa-solid fa-box-open"></i><span class="lang-ar">إدارة المنتجات</span><span
                        class="lang-en">Products</span></a>
                <a href="orders.html"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i
                        class="fa-solid fa-truck-fast"></i><span class="lang-ar">تتبع الطلبات</span><span
                        class="lang-en">Orders</span></a>
                <a href="wallet.html"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i
                        class="fa-solid fa-wallet"></i><span class="lang-ar">المحفظة</span><span
                        class="lang-en">Wallet</span></a>
                <a href="messages.html"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i
                        class="fa-solid fa-comments"></i><span class="lang-ar">المراسلة والتعليقات</span><span
                        class="lang-en">Messages</span></a>
                <a href="analytics.html"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i
                        class="fa-solid fa-chart-simple"></i><span class="lang-ar">الإحصائيات</span><span
                        class="lang-en">Analytics</span></a>
                <a href="store-settings.html"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i
                        class="fa-solid fa-sliders"></i><span class="lang-ar">إعدادات المتجر</span><span
                        class="lang-en">Store Settings</span></a> --}}
          <a href="{{ route('seller.profile.show') }}"
              class="{{ $inactive_link }} {{ request()->routeIs('seller.profile.show') ? $active_link : $inactive_link }}"><i
                  class="fa-solid fa-user-gear"></i><span class="lang-ar">الملف الشخصي</span><span
                  class="lang-en">Profile</span></a>

                <hr>
          <a onclick="event.preventDefault(); document.getElementById('post-form').submit();"
              class="{{ $inactive_link }} {{ request()->routeIs('seller.profile.show') ? $active_link : $inactive_link }}">
              <i class="fa-solid fa-grid-2"></i>
              <span class="lang-ar">تسجيل الخروج</span><span class="lang-en">Logout</span></a>


          <form id="post-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </nav>
