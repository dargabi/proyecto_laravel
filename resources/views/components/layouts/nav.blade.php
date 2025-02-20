@auth
    <nav class="h-auto min-h-12 py-3 bg-gradient-to-r from-enterprise-light-gray to-enterprise-dark-gray shadow-md flex flex-wrap justify-center items-center px-6 gap-3 sm:gap-4"
        aria-label="Main Navigation">

        <!-- About Link -->
        <a href="#"
            class="btn btn-sm px-4 py-2 bg-enterprise-dark-gray text-enterprise-white hover:bg-enterprise-dark-blue rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-blue"
            aria-current="page">
            About
        </a>

        <!-- Home Link -->
        <a href="#"
            class="btn px-4 py-2 bg-enterprise-light-gray text-enterprise-black hover:bg-enterprise-dark-gray rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-dark-gray">
            Home
        </a>

        <!-- Contact Link -->
        <a href="#"
            class="btn px-4 py-2 bg-enterprise-blue text-enterprise-white hover:bg-enterprise-dark-blue rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-blue">
            Contact
        </a>

        <!-- Alumnos Link -->
        <a href="{{ route('alumnos') }}"
            class="btn px-4 py-2 bg-enterprise-dark-blue text-enterprise-white hover:bg-enterprise-dark-gray rounded-md shadow-sm hover:shadow transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-dark-blue">
            Alumnos
        </a>

        <!-- News Link -->
        <a href="#"
            class="btn px-4 py-2 bg-enterprise-white text-enterprise-dark-gray hover:bg-enterprise-light-gray rounded-md shadow-sm hover:shadow-md transition-all duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-enterprise-light-gray">
            News
        </a>
    </nav>
@endauth
