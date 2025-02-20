<x-layouts.layout>
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-enterprise-light-gray via-enterprise-gray to-enterprise-dark-gray py-10">
        <div class="bg-enterprise-white p-8 rounded-xl shadow-xl max-w-md w-full">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Title -->
                <h2 class="text-2xl font-semibold text-center text-enterprise-blue mb-6">{{ __('Create an Account') }}</h2>

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-enterprise-blue" />
                    <x-text-input id="name" class="block mt-1 w-full bg-enterprise-light-gray border-2 border-enterprise-light-gray focus:ring-2 focus:ring-enterprise-blue focus:outline-none"
                                  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-enterprise-dark-blue" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-enterprise-blue" />
                    <x-text-input id="email" class="block mt-1 w-full bg-enterprise-light-gray border-2 border-enterprise-light-gray focus:ring-2 focus:ring-enterprise-blue focus:outline-none"
                                  type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-enterprise-dark-blue" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-enterprise-blue" />
                    <x-text-input id="password" class="block mt-1 w-full bg-enterprise-light-gray border-2 border-enterprise-light-gray focus:ring-2 focus:ring-enterprise-blue focus:outline-none"
                                  type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-enterprise-dark-blue" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-enterprise-blue" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full bg-enterprise-light-gray border-2 border-enterprise-light-gray focus:ring-2 focus:ring-enterprise-blue focus:outline-none"
                                  type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-enterprise-dark-blue" />
                </div>

                <!-- Login Link & Submit Button -->
                <div class="flex items-center justify-between mt-6">
                    <!-- Link to Login if user already has an account -->
                    <div class="text-sm">
                        <a class="underline text-enterprise-blue hover:text-enterprise-dark-blue focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-blue" href="{{ route('login') }}">
                            {{ __('Already have an account? Log in') }}
                        </a>
                    </div>

                    <!-- Register Button -->
                    <x-primary-button class="bg-enterprise-blue hover:bg-enterprise-dark-blue text-enterprise-white focus:ring-4 focus:ring-enterprise-blue">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
