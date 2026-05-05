<x-guest-layout>
     <x-slot name="title">
        {{ __('actions.verfiy_email') }}
    </x-slot>

      <main class="px-4 py-4 lg:py-12 flex items-center justify-center">
        <section
            class="max-h-[600px] py-7 px-7 max-w-[600px] overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white/90 shadow-2xl shadow-homy-green-700/10 dark:border-homy-gold-600/35 dark:bg-[#12211B]/90 lg:grid-cols-2">
   

    <div class="mb-4 text-sm text-gray-500 leading-relaxed">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button mt-10>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

        </section>
      </main>
</x-guest-layout>
