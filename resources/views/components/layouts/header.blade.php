<header class="bg-gradient-to-tr from-enterprise-light-gray via-enterprise-dark-gray to-enterprise-light-gray shadow-xl py-4">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between px-4 py-2">
        <!-- Logo with enhanced hover effect -->
        <div class="mb-4 sm:mb-0">
            <img class="h-12 md:h-16 rounded-full shadow-md transition-all duration-300 transform hover:scale-110 hover:shadow-lg"
                src="{{ asset('img/logo1.png') }}" alt="">
        </div>

        <!-- Site Title with improved typography -->
        <h1 class="text-3xl md:text-4xl font-bold text-enterprise-blue text-center mb-4 sm:mb-0">
            yoshi
        </h1>

        <!-- Authentication Section with improved styling -->
        <div class="flex items-center space-x-4">
            @guest
                <!-- Login and Register buttons with enhanced styling -->
                <div class="space-x-3">
                    <a href="{{ route('login') }}"
                    class="btn btn-sm px-4 py-2 bg-enterprise-white text-enterprise-dark-gray hover:bg-enterprise-light-gray rounded-full font-medium shadow-md hover:shadow-lg transition-all duration-300">
                    Login
                    </a>

                    <a href="{{ route('register') }}"
                    class="btn btn-sm px-4 py-2 bg-enterprise-blue text-enterprise-white hover:bg-enterprise-dark-blue rounded-full font-medium shadow-md hover:shadow-lg transition-all duration-300">
                    Register
                    </a>
                </div>
            @endguest

            @auth
                <!-- User info and logout section with improved layout -->
                <div class="flex items-center space-x-3">
                    <span class="text-enterprise-white font-medium">
                        {{ auth()->user()->name }}
                    </span>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="btn btn-sm px-4 py-2 bg-enterprise-light-gray text-enterprise-dark-gray hover:bg-enterprise-dark-gray rounded-full font-medium shadow-md hover:shadow-lg transition-all duration-300">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</header>
