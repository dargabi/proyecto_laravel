<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Stylesheets and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Main container with background for light/dark modes -->
    <div class="min-h-screen">

        <!-- Header section with logo, title, and authentication buttons -->
        <header class="h-[15vh]">
            <!-- Logo -->
            <img class="h-16 max-h-full bg-white p-2 rounded-md" src="{{ asset('images/logo.png') }}" alt="logo">

            <!-- Title -->
            <h1>GESTIÓN CENTRO</h1>

            <!-- Authentication buttons: Login & Register -->
            <div class="auth-buttons">
                <form action="" class="flex gap-6">
                    <!-- Login button -->
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">
                            <button
                                type="button"
                                class="login-btn">
                                Login
                            </button>
                        </a>
                    @endif

                    <!-- Register button -->
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <button
                                type="button"
                                class="register-btn">
                                Register
                            </button>
                        </a>
                    @endif
                </form>
            </div>
        </header>

        <!-- Dynamic header section (if provided) -->
        @isset($header)
            <header class="dynamic-header">
                <div class="container">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page content area -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
