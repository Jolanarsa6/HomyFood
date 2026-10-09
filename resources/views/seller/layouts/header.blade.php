<header
    class="border-b border-homy-gold-200/80 bg-white/80 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
    <div class="mx-auto flex w-full max-w-7xl items-center gap-3 px-4 py-3">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <x-application-logo />
            <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">Homy Food</p>
        </a>
        <div class="ms-auto flex items-center gap-2">
            <x-lang-switch />
            <x-them-toggle />
            <a href="{{ route('home') }}"
                class="rounded-2xl border-2 border-homy-gold-300 px-4 py-2 text-sm font-black text-homy-green-700 transition hover:bg-homy-gold-500 hover:text-homy-green-900 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
                <span>{{ __('actions.back_home') }}</span>
            </a>
        </div>
    </div>
</header>
