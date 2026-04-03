@props(['disabled' => false])

<input 
    type="text" 
    @disabled($disabled) 
    {{ $attributes->merge(['class' => '
        w-full 
        px-5 
        py-3.5 
        rounded-xl 
        outline-none 
        transition-all 
        duration-300 
        ease-in-out    
        bg-white 
        border 
        border-gray-200 
        text-homy-green-700 
        placeholder:text-gray-400     
        shadow-sm 
        hover:shadow-md     
        focus:border-homy-gold-500    
        focus:ring-2 
        focus:ring-homy-gold-100       
        focus:bg-homy-gold-50/50    
        disabled:bg-gray-100 
        disabled:cursor-not-allowed 
        disabled:opacity-75
    ']) }}
>