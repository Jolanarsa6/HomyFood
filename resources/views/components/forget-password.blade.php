<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
    <a class="
    underline  
    text-sm 
    font-medium 
    rounded-md 
    mb-2.5 
    block 
    transition-colors 
    duration-200 
    text-homy-gold-500   
    hover:text-homy-green-700    
    focus:outline-none 
    focus:ring-2 
    focus:ring-offset-2 
    focus:ring-homy-gold-100 
    focus:text-homy-green-700 
"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif
</div>
