<footer
            class="border-t border-homy-gold-200/80 bg-white/80 px-4 py-10 dark:border-homy-gold-600/30 dark:bg-[#0f1f18]/85">
            <div class="mx-auto grid w-full max-w-7xl gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <h3 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">{{ __('partials/footer.title') }}</h3>
                    <p class="mt-2 text-sm font-medium text-slate-500 dark:text-slate-300">
                        <span>{{ __('partials/footer.homy_desc') }}</span>
                    </p>
                </div>
                <div>
                    <h4 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">
                        <span>{{ __('partials/footer.quick_link') }}</span>
                    </h4>
                    <div class="mt-3 grid gap-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <a href="{{ route('buyer.special-offers') }}">Special Offers</a>
                        <a href="{{ route('buyer.compare') }}">Compare</a>
                        <a href="{{ route('buyer.wishlist') }}">Wishlist</a>
                        <a href="{{ route('buyer.show_cart') }}">Cart</a>
                    </div>
                </div>
                <div>
                    <h4 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">
                        <span>{{ __('partials/footer.info') }}</span>
                    </h4>
                    <div class="mt-3 grid gap-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <a href="{{ route('buyer.about_us') }}">About Us</a>
                        <a href="{{ route('buyer.contact_us.show') }}">Contact Us</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('buyer.register') }}">Register</a>
                    </div>
                </div>
                <div>
                    <h4 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">
                        <span>{{ __('partials/footer.follow_us') }}</span>
                    </h4>
                    <div class="mt-3 flex gap-2">
                        <a href="#"
                            class="grid h-10 w-10 place-items-center rounded-xl border border-homy-gold-200 text-homy-green-700 dark:border-homy-gold-600/30 dark:text-homy-gold-400"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="grid h-10 w-10 place-items-center rounded-xl border border-homy-gold-200 text-homy-green-700 dark:border-homy-gold-600/30 dark:text-homy-gold-400"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="grid h-10 w-10 place-items-center rounded-xl border border-homy-gold-200 text-homy-green-700 dark:border-homy-gold-600/30 dark:text-homy-gold-400"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
</footer>