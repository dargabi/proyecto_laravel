<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gabriel Laravel {{$title ?? ""}}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite("resources/css/app.css")
</head>
<body class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <x-layouts.header />
    <x-layouts.nav />

    <main class="container mx-auto py-6 px-4 sm:px-6 lg:px-8 min-h-[65vh]">
        {{$slot}}
    </main>
    
    <x-layouts.footer />

    <!-- Scripts adicionales -->
    <script>
        // Identificar la ruta actual para resaltar el botón activo
        document.addEventListener('DOMContentLoaded', function() {
            const path = window.location.pathname;
            const navLinks = document.querySelectorAll('nav a');
            
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && path.includes(href.replace(/^https?:\/\/[^\/]+/, ''))) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
