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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-enterprise-dark-blue antialiased">
    <!-- Main container centered with flexbox -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-8 sm:pt-0 bg-gradient-to-r from-enterprise-teal to-enterprise-blue dark:from-enterprise-dark-teal dark:to-enterprise-dark-blue">

        <!-- Logo Section -->
        <div class="mb-6">
            <a href="/">
                <x-application-logo class="w-24 h-24 text-enterprise-white" />
            </a>
        </div>

        <!-- Content Container with padding, background, and shadow -->
        <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-enterprise-white dark:bg-enterprise-dark-blue shadow-lg rounded-lg border border-enterprise-light-blue dark:border-enterprise-dark-blue">
            <!-- Dynamic content slot will be injected here -->
            {{ $slot }}
        </div>
    </div>
</body>
</html>
