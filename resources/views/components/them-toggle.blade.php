<div x-data="{
    darkMode: localStorage.getItem('theme') === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
}" x-init="$watch('darkMode', val => {
    localStorage.setItem('theme', val ? 'dark' : 'light');
    if (val) { document.documentElement.classList.add('dark'); } else { document.documentElement.classList.remove('dark'); }
})" class="flex items-center">

    <button @click="darkMode = !darkMode" type="button" {{-- h-6 w-11 is standard toggle size --}}
        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 focus:outline-none bg-gray-200 dark:bg-gray-700"
        {{-- class="h-11 w-16 relative inline-flex flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 focus:outline-none border-homy-gold-200 bg-white text-homy-green-700 shadow-sm  hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300" --}}

        role="switch" :aria-checked="darkMode">

        <span class="sr-only">{{ __('Toggle Theme') }}</span>

        <!-- Toggle Knob -->
        {{-- We use ltr:translate-x and rtl:-translate-x to support both directions --}}
        <span
            class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
            :class="{
                'ltr:translate-x-5 rtl:-translate-x-5': darkMode,
                'translate-x-0': !darkMode
            }">

            <!-- Sun Icon (Visible in Dark) -->
            <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                :class="darkMode ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'">
                <svg class="h-11 w-11 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
                </svg>
            </span>

            <!-- Moon Icon (Visible in Light) -->
            <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                :class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'">
                <svg class="h-11 w-11 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </span>
        </span>
    </button>
</div>
