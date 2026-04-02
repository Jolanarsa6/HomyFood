<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-green-200 transition-all active:scale-95 mt-6']) }}>
    {{ $slot }}
</button>
