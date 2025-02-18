<x-layouts.layout>
    <!-- Session Status -->
    <div class="flex flex-flow justify-center min-h-full bg-gradient-to-r from-enterprise-light-gray via-enterprise-gray to-enterprise-light-gray py-10">
        <div class="bg-enterprise-white p-8 rounded-xl shadow-xl max-w-sm w-full">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-2xl font-bold text-center text-enterprise-blue mb-6">{{ __('Welcome Back!') }}</h1>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-enterprise-dark-blue" />
                    <x-text-input id="email" class="block mt-1 w-full bg-enterprise-light-gray border-2 border-enterprise-dark-gray focus:ring-2 focus:ring-enterprise-blue focus:outline-none" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-enterprise-dark-blue" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-enterprise-dark-blue" />

                    <x-text-input id="password" class="block mt-1 w-full bg-enterprise-light-gray border-2 border-enterprise-dark-gray focus:ring-2 focus:ring-enterprise-blue focus:outline-none"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-enterprise-dark-blue" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded bg-enterprise-light-gray border-enterprise-dark-gray text-enterprise-blue shadow-sm focus:ring-enterprise-blue" name="remember">
                        <span class="ms-2 text-sm text-enterprise-dark-blue">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-enterprise-dark-blue hover:text-enterprise-blue focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-blue" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3 bg-enterprise-blue hover:bg-enterprise-dark-blue focus:ring-4 focus:ring-enterprise-blue">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
