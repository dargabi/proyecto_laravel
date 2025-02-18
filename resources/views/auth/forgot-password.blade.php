<x-guest-layout>
    <div class="mb-4 text-sm text-enterprise-dark-gray dark:text-enterprise-light-gray">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-enterprise-dark-gray"/>

            <x-text-input id="email" class="block mt-1 w-full bg-enterprise-white border border-enterprise-light-gray focus:ring-enterprise-blue focus:border-enterprise-blue"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required autofocus />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="bg-enterprise-blue hover:bg-enterprise-dark-blue text-enterprise-white">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
