<x-guest-layout>
    <div class="mb-4 text-sm text-enterprise-dark-gray dark:text-enterprise-light-gray">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-enterprise-dark-gray"/>

            <x-text-input id="password" class="block mt-1 w-full bg-enterprise-white border border-enterprise-light-gray focus:ring-enterprise-blue focus:border-enterprise-blue"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="bg-enterprise-blue hover:bg-enterprise-dark-blue text-enterprise-white">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

