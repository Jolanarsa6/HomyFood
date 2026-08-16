<div class="fixed top-5 right-5 z-50 flex flex-col gap-3 max-w-sm w-full px-4">
    @if ($errors->any())
         <div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-homy-green-100 dark:bg-slate-900 border border-homy-green-500/30 dark:border-homy-green-600/50 text-homy-green-700 dark:text-homy-gold-400 flex items-start gap-3" role="alert">
            <svg class="w-5 h-5 text-homy-green-500 dark:text-homy-gold-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <strong class="font-semibold block text-homy-green-700 dark:text-homy-gold-400 text-base">{{ __('messages.delete_from_wishlist') }}</strong>
                <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
            {{ $errors->first() }}
                </p>
            </div>
        </div>
    @endif

    @if(session('success'))
        <div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-homy-green-100 dark:bg-slate-900 border border-homy-green-500/30 dark:border-homy-green-600/50 text-homy-green-700 dark:text-homy-gold-400 flex items-start gap-3" role="alert">
            <svg class="w-5 h-5 text-homy-green-500 dark:text-homy-gold-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <strong class="font-semibold block text-homy-green-700 dark:text-homy-gold-400 text-base">{{ __('messages.addSuccess') }}</strong>
                <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    @endif

       @if(session('remove_success'))
        <div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-homy-green-100 dark:bg-slate-900 border border-homy-green-500/30 dark:border-homy-green-600/50 text-homy-green-700 dark:text-homy-gold-400 flex items-start gap-3" role="alert">
            <svg class="w-5 h-5 text-homy-green-500 dark:text-homy-gold-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <strong class="font-semibold block text-homy-green-700 dark:text-homy-gold-400 text-base">{{ __('messages.delete_from_wishlist') }}</strong>
                {{-- <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
                    {{ session('remove_success') }}
                </p> --}}
            </div>
        </div>
    @endif

      @if(session('comment_success'))
        <div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-homy-green-100 dark:bg-slate-900 border border-homy-green-500/30 dark:border-homy-green-600/50 text-homy-green-700 dark:text-homy-gold-400 flex items-start gap-3" role="alert">
            <svg class="w-5 h-5 text-homy-green-500 dark:text-homy-gold-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <strong class="font-semibold block text-homy-green-700 dark:text-homy-gold-400 text-base">{{ __('messages.comment_success') }}</strong>
                <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
                    {{ session('comment_success') }}
                </p>
            </div>
        </div>
    @endif

    {{-- @if(session('status'))
        <div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-homy-green-100 dark:bg-slate-900 border border-homy-green-500/30 dark:border-homy-green-600/50 text-homy-green-700 dark:text-homy-gold-400 flex items-start gap-3" role="alert">
            <svg class="w-5 h-5 text-homy-green-500 dark:text-homy-gold-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <strong class="font-semibold block text-homy-green-700 dark:text-homy-gold-400 text-base">{{ __('messages.addSuccess') }}</strong>
                <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
                    {{ session('status') }}
                </p>
            </div>
        </div>
    @endif --}}

    @if(session('error'))
        <div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-rose-50 dark:bg-slate-900 border border-rose-200 dark:border-rose-900/40 text-rose-800 dark:text-rose-400 flex items-start gap-3" role="alert">
            <svg class="w-5 h-5 text-rose-500 dark:text-rose-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <div>
                <strong class="font-semibold block text-rose-800 dark:text-rose-400 text-base">{{ __('messages.duplicate_item') }}</strong>
                <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
                    {{ session('error') }}
                </p>
            </div>
        </div>
    @endif

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const alerts = document.querySelectorAll('.js-flash-alert');

        alerts.forEach(alert => {
            setTimeout(() => {
                alert.classList.remove('translate-x-0', 'opacity-100');
                alert.classList.add('translate-x-10', 'opacity-0');

                setTimeout(() => {
                    alert.remove();
                }, 500);
            }, 4000);
        });
    });
</script>