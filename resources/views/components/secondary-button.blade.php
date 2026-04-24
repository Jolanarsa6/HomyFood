  <button 
   {{ $attributes->merge(['type' => 'button', 'class' => '
        w-full 
        py-4 
        px-8 
        rounded-xl 
        font-bold
        text-lg 
        transition-all 
        duration-300 
        ease-in-out
        flex 
        items-center 
        justify-center 
        gap-3
        active:scale-95
        bg-white 
        border-2 
        border-homy-gold-400 
        text-homy-green-700 
        shadow-md 
        hover:shadow-lg      
        hover:bg-homy-gold-500 
        hover:text-homy-green-700 
        hover:border-homy-green-700 
    ']) }}> 

    {{ $slot }}
</button>
