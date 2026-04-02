@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'shadow-sm w-full px-4 py-3 rounded-xl border-gray-200 focus:border-orange-500 focus:ring focus:ring-orange-200 transition-all outline-none bg-gray-50']) }}>
