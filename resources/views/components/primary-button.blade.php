<button 
   {{ $attributes->merge([
        'type' => 'submit', 
        'class' => '
            w-full
            py-4 
            px-8 
            rounded-2xl 
            font-black 
            text-lg 
            transition-all 
            duration-300 
            ease-in-out
            flex 
            items-center 
            justify-center 
            gap-3 
            active:scale-95 
            bg-homy-green-700 
            text-white 
            border-2
            border-transparent
            shadow-[0_10px_20px_-5px_rgba(26,46,38,0.3)]
            hover:bg-homy-green-600 
            hover:-translate-y-1
            hover:shadow-[0_15px_30px_-5px_rgba(184,148,93,0.4)]
            dark:bg-homy-gold-500 
            dark:text-homy-green-900
            mt-6
            cursor-pointer
            z-10
        '
    ]) }}>
   
    {{ $slot }}
</button>