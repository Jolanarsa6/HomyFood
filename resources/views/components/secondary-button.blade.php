{{-- <button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}> --}}
  
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
