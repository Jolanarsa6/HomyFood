<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'inline-flex items-center justify-center px-6 py-3 
                bg-red-50 dark:bg-red-950/30 
                border border-red-100 dark:border-red-900/50 
                rounded-2xl 
                font-black text-xs text-red-600 dark:text-red-400 
                uppercase tracking-widest 
                hover:bg-red-600 hover:text-white dark:hover:bg-red-600 dark:hover:text-white
                active:scale-95 
                focus:outline-none focus:ring-4 focus:ring-red-100 dark:focus:ring-red-900/20 
                transition-all duration-300 ease-in-out shadow-sm'
]) }}>
    <i class="fas fa-trash-alt me-2 text-[10px]"></i> {{ $slot }}
</button>
