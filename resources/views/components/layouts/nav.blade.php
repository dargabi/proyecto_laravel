@auth
    <nav class="h-auto min-h-12 py-3 bg-gradient-to-r from-sage-400 to-bluegray-400 shadow-md flex flex-wrap justify-center items-center px-6 gap-3 sm:gap-4"
        aria-label="Main Navigation">

        <!-- About Link -->
        <a href="#"
            class="btn btn-sm px-4 py-2 bg-bluegray-600 text-pearl hover:bg-bluegray-700 rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-bluegray-400"
            aria-current="page">
            About
        </a>

        <!-- Home Link -->
        <a href="#"
            class="btn px-4 py-2 bg-sand-500 text-white hover:bg-sand-600 rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-sand-400">
            Home
        </a>

        <!-- Contact Link -->
        <a href="#"
            class="btn px-4 py-2 bg-blue-500 text-white hover:bg-blue-600 rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
            Contact
        </a>

        <!-- Alumnos Link -->
        <a href="{{ route('alumnos') }}"
            class="btn px-4 py-2 bg-sage-600 text-white hover:bg-sage-700 rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-sage-400">
            Alumnos
        </a>

        <!-- News Link -->
        <a href="#"
            class="btn px-4 py-2 bg-pearl text-bluegray-700 hover:bg-pearl-200 rounded-md shadow-sm hover:shadow-md transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-pearl-400">
            News
        </a>
    </nav>
@endauth
