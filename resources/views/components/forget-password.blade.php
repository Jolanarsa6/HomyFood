<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
        <a class="underline text-xs font-bold text-orange-500 hover:text-orange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif
</div>
