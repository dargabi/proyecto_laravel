<x-guest-layout>
    <div class="mb-4 text-sm text-enterprise-dark-gray">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-enterprise-blue">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-6 flex items-center justify-between">
        <!-- Resend Verification Email -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <x-primary-button class="bg-enterprise-blue hover:bg-enterprise-dark-blue focus:ring-4 focus:ring-enterprise-blue">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Log Out Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-enterprise-dark-gray hover:text-enterprise-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-blue">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
