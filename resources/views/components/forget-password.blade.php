<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
        <a 
            href="{{ route('password.request') }}" class="text-xs font-black text-homy-gold-600 underline">
            {{ __('global.forget_password') }}
        </a>
    @endif
</div>
