  <button 
   {{ $attributes->merge(['type' => 'button', 'class' => '
      inline-flex items-center gap-2 rounded-2xl border-2 border-homy-gold-400 bg-white px-6 py-3 text-sm font-black text-homy-green-700 transition hover:-translate-y-0.5 hover:bg-homy-gold-500 hover:text-homy-green-900 dark:bg-homy-gold-500 dark:text-homy-green-900
    ']) }}> 

    {{ $slot }}
</button>
