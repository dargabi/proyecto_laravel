<x-layouts.layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">
                <i class="fas fa-user-circle mr-2"></i>{{ __('Mi Perfil') }}
            </h1>
            
            <div class="space-y-6">
                <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
