@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-700 font-bold mb-2']) }}>
    {{ $value ?? $slot }}
</label>


