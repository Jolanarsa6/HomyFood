@props(['value'])
<label
    {{ $attributes->merge([
        'class' => '
        block 
        text-sm 
        font-bold  
        text-homy-green-700    
        hover:text-homy-green-600 
        transition-colors 
        duration-200
        mb-4
    ',
    ]) }}>

    {{ $value ?? $slot }}
</label>
