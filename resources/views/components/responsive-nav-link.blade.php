@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-3 border-s-4 border-homy-gold-500 text-start text-base font-black text-homy-green-700 dark:text-homy-gold-400 bg-homy-gold-50/50 dark:bg-homy-green-800/30 focus:outline-none transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-3 border-s-4 border-transparent text-start text-base font-bold text-gray-500 dark:text-gray-400 hover:text-homy-green-700 dark:hover:text-homy-gold-400 hover:bg-gray-50 dark:hover:bg-homy-green-900/50 hover:border-homy-gold-200 dark:hover:border-homy-gold-600 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
