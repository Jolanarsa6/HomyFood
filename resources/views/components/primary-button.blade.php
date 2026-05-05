<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => '
              w-full rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600
            ',
    ]) }}>

    {{ $slot }}
</button>
