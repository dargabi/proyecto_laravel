<x-layouts.layout>
    <!-- Slot for Logout Title -->
    <x-slot name="logout">
        <h2 class="font-semibold text-xl text-enterprise-dark-blue dark:text-enterprise-light-blue leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Main Content Section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-enterprise-white dark:bg-enterprise-dark-blue overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-enterprise-dark-blue dark:text-enterprise-white">
                    <!-- Welcome Message -->
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
