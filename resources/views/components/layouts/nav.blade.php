@auth
    <nav class="h-auto min-h-16 py-4 bg-gradient-to-r from-gray-800 to-gray-900 shadow-md flex flex-wrap justify-center items-center px-6 gap-4 sm:gap-6"
        aria-label="Main Navigation">

        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}"
            class="btn min-w-[120px] px-5 py-3 text-base font-medium bg-blue-600 text-white hover:bg-blue-700 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex items-center justify-center"
            aria-current="{{ request()->routeIs('dashboard') ? 'page' : '' }}">
            <i class="fas fa-home mr-2"></i> Dashboard
        </a>

        <!-- Home Link -->
        <a href="{{ url('/') }}"
            class="btn min-w-[120px] px-5 py-3 text-base font-medium bg-gray-700 text-white hover:bg-gray-600 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 flex items-center justify-center">
            <i class="fas fa-house-user mr-2"></i> Home
        </a>

        <!-- Alumnos Link -->
        <a href="{{ route('alumnos.index') }}"
            class="btn min-w-[120px] px-5 py-3 text-base font-medium {{ request()->routeIs('alumnos.*') ? 'bg-green-600 hover:bg-green-700' : 'bg-gray-700 hover:bg-gray-600' }} text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-green-500 flex items-center justify-center">
            <i class="fas fa-user-graduate mr-2"></i> Alumnos
        </a>

        <!-- Profile Link -->
        <a href="{{ route('profile.edit') }}"
            class="btn min-w-[120px] px-5 py-3 text-base font-medium bg-purple-600 text-white hover:bg-purple-700 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 flex items-center justify-center">
            <i class="fas fa-user-circle mr-2"></i> Perfil
        </a>

        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" 
                class="btn min-w-[120px] px-5 py-3 text-base font-medium bg-red-600 text-white hover:bg-red-700 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-red-500 flex items-center justify-center">
                <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
            </button>
        </form>
    </nav>
@endauth
