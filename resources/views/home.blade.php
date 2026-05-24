<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'TokoOnline') }} - Belanja Nyaman dan Aman</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased flex flex-col min-h-screen">

    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow">
        
        <!-- Hero Section -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 pt-10 sm:pt-16 lg:pt-20">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block xl:inline">Koleksi Terbaru</span>
                                <span class="block text-indigo-600 xl:inline">Gaya Hidup Anda</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Temukan berbagai produk menarik dengan kualitas terbaik dan harga terjangkau. Belanja sekarang dan nikmati promo gratis ongkir ke seluruh Indonesia.
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10 transition">
                                        Mulai Belanja
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10 transition">
                                        Lihat Promo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Orang berbelanja">
            </div>
        </div>

        <!-- Featured Products -->
        <div class="bg-gray-50 py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-baseline sm:justify-between">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Produk Unggulan</h2>
                    <a href="#" class="hidden sm:block text-sm font-semibold text-indigo-600 hover:text-indigo-500 transition">Lihat semua produk <span aria-hidden="true">&rarr;</span></a>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <!-- Product 1 -->
                    <div class="group relative flex flex-col bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-4 border border-gray-100 h-full">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Smartwatch" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-medium">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Smartwatch Elite
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Elektronik</p>
                            </div>
                            <p class="text-sm font-semibold text-gray-900">Rp 1.250.000</p>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="group relative flex flex-col bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-4 border border-gray-100 h-full">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Headphone" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-medium">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Headphone Pro Max
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Audio</p>
                            </div>
                            <p class="text-sm font-semibold text-gray-900">Rp 850.000</p>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="group relative flex flex-col bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-4 border border-gray-100 h-full">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
                            <img src="https://images.unsplash.com/photo-1584916201218-f4242ceb4809?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Sepatu Kets" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-medium">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Sepatu Sneakers
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Fashion</p>
                            </div>
                            <p class="text-sm font-semibold text-gray-900">Rp 450.000</p>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="group relative flex flex-col bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-4 border border-gray-100 h-full">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none">
                            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Kamera Digital" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-medium">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Kamera Mirrorless
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Kamera</p>
                            </div>
                            <p class="text-sm font-semibold text-gray-900">Rp 6.500.000</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:hidden">
                    <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Lihat semua produk <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-indigo-700">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                    <span class="block">Siap untuk mulai berbelanja?</span>
                    <span class="block text-indigo-200">Dapatkan diskon 20% untuk pembelian pertama.</span>
                </h2>
                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ Route::has('register') ? route('register') : '#' }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 transition">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer Component -->
    <x-footer />

</body>
</html>
