<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-pink-600" />
            <x-text-input id="email" class="block mt-1 w-full bg-pink-50 border-2 border-pink-300 focus:ring-2 focus:ring-pink-500 focus:outline-none"
                          type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-pink-600" />
            <x-text-input id="password" class="block mt-1 w-full bg-pink-50 border-2 border-pink-300 focus:ring-2 focus:ring-pink-500 focus:outline-none"
                          type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-pink-600" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-pink-50 border-2 border-pink-300 focus:ring-2 focus:ring-pink-500 focus:outline-none"
                          type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="bg-pink-600 hover:bg-pink-700 focus:ring-4 focus:ring-pink-500 text-white">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
