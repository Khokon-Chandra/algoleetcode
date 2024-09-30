<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LeetCode</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased dark:bg-gray-800 h-screen grid grid-rows-[auto_1fr_auto] w-screen overflow-x-hidden">

    <header class="border-b border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm">
        <x-navbar />
    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 px-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>


</body>

</html>
