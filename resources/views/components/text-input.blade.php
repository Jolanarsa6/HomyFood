@props(['disabled' => false])

<input 
    @disabled($disabled) 
    {{ $attributes->merge(['class' => '
      w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 focus:ring-1 focus:ring-homy-gold-100 dark:border-homy-gold-600/35 dark:bg-[#173326]
    ']) }}
>