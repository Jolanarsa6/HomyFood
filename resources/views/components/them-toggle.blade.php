<!-- Alpine + Tailwind header-style theme toggle.
     Requires Alpine.js present on the page.
     Matches header icons: square, rounded-2xl, gradient -> white on active. -->
<div x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches) }"
     x-init="document.documentElement.classList.toggle('dark', darkMode); $watch('darkMode', val => { localStorage.setItem('theme', val ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', val); })"
     class="flex items-center">

  <button
    @click="darkMode = !darkMode"
    type="button"
    role="switch"
    :aria-checked="darkMode"
    class="group inline-flex h-11 items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-3 text-xs font-black text-homy-green-700 shadow-sm transition hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300 focus:outline-none focus:ring-2 focus:ring-homy-gold-200">

    <span class="sr-only">تبديل الوضع</span>

    <!-- Sun icon (visible when light mode) -->
    <svg class="h-5 w-5 transition-opacity duration-200" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
         :class="darkMode ? 'opacity-0' : 'opacity-100'">
      <path d="M6.995 12c0 2.761 2.246 5 5.005 5 2.76 0 5-2.239 5-5 0-2.759-2.24-5-5-5-2.759 0-5.005 2.241-5.005 5zm13.005-.5h2v1h-2v-1zM2 11.5h2v1H2v-1zM12 2v2h0V2zm0 18v2h0v-2zM4.22 4.22l1.42 1.42L4.22 4.22zM18.36 18.36l1.42 1.42-1.42-1.42zM18.36 5.64l1.42-1.42-1.42 1.42zM4.22 19.78l1.42-1.42-1.42 1.42z"/>
    </svg>

    <!-- Moon icon (visible when dark mode) -->
    <svg class="absolute h-5 w-5 transition-opacity duration-200" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
         :class="darkMode ? 'opacity-100' : 'opacity-0'">
      <path d="M21.752 15.002A9 9 0 0112 3a1 1 0 00-1 1 7 7 0 1010.752 10.002 1 1 0 00-.0-.0z"/>
    </svg>

  </button>

</div>
