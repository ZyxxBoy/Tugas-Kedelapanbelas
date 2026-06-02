<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center p-4">
        
        <div class="w-full max-w-md bg-white/90 backdrop-blur-xl shadow-2xl rounded-3xl overflow-hidden border border-white/40 p-8 transform transition-all hover:scale-[1.01] duration-300">
            
            <div class="flex justify-center mb-8">
                <a href="/" class="transform transition hover:scale-110 duration-300">
                    <div class="bg-indigo-600 text-white rounded-xl px-6 py-3 font-extrabold text-3xl shadow-lg tracking-wider">
                        TUKU
                    </div>
                </a>
            </div>

            <div class="w-full">
                {{ $slot }}
            </div>
        </div>

    </body>
</html>
