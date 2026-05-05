@props(['value'])
<label
    {{ $attributes->merge([
        'class' => '
       mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400
    ',
    ]) }}>

   <span> {{ $value ?? $slot }}</span>
</label>
