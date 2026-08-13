<div class="mx-2 auth-buttons items-center gap-3 auth-buttons hidden lg:block">
    <x-secondary-button onclick="event.preventDefault(); document.getElementById('post-form').submit();">
        {{ __('Log Out') }}
    </x-secondary-button>

    <form id="post-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
