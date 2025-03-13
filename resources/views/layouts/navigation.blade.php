<nav x-data="{ open: false }" class="bg-enterprise-white dark:bg-enterprise-dark-blue border-b border-enterprise-light-blue dark:border-enterprise-dark-blue">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo Section -->
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <!-- Application Logo -->
                        <x-application-logo class="block h-9 w-auto fill-current text-enterprise-dark-blue dark:text-enterprise-light-blue" />
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('alumnos.index')" :active="request()->routeIs('alumnos.*')" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                        {{ __('Alumnos') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-enterprise-dark-blue dark:text-enterprise-light-blue bg-enterprise-white dark:bg-enterprise-dark-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <!-- Dropdown Icon -->
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Log Out Form -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-enterprise-blue dark:focus:text-enterprise-dark-blue transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <!-- Hamburger icon for mobile view -->
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <!-- Close icon for mobile view -->
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('alumnos.index')" :active="request()->routeIs('alumnos.*')" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                {{ __('Alumnos') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-enterprise-light-blue dark:border-enterprise-dark-blue">
            <div class="px-4">
                <!-- User Info -->
                <div class="font-medium text-base text-enterprise-dark-blue dark:text-enterprise-light-blue">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-enterprise-gray dark:text-enterprise-light-blue">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Profile Link -->
                <x-responsive-nav-link :href="route('profile.edit')" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Log Out Form -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-enterprise-dark-blue dark:text-enterprise-light-blue hover:text-enterprise-blue dark:hover:text-enterprise-dark-blue">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
