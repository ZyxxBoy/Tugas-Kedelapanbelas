<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keranjang Belanja - TUKU</title>
    
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
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full">
        
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 mb-8">Keranjang Belanja</h1>

        <div class="lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
            
            <section aria-labelledby="cart-heading" class="lg:col-span-7">
                <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                    
                    <!-- Item 1 -->
                    <li class="flex py-6 sm:py-10">
                        <div class="flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Smartwatch" class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                            <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                <div>
                                    <div class="flex justify-between">
                                        <h3 class="text-sm">
                                            <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Smartwatch Elite</a>
                                        </h3>
                                    </div>
                                    <div class="mt-1 flex text-sm">
                                        <p class="text-gray-500">Hitam</p>
                                    </div>
                                    <p class="mt-1 text-sm font-medium text-gray-900">Rp 1.250.000</p>
                                </div>

                                <div class="mt-4 sm:mt-0 sm:pr-9">
                                    <label for="quantity-0" class="sr-only">Quantity, Smartwatch Elite</label>
                                    <select id="quantity-0" name="quantity-0" class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>

                                    <div class="absolute right-0 top-0">
                                        <button type="button" class="-m-2 inline-flex p-2 text-gray-400 hover:text-red-500">
                                            <span class="sr-only">Hapus</span>
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Item 2 -->
                    <li class="flex py-6 sm:py-10">
                        <div class="flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1584916201218-f4242ceb4809?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Sepatu Kets" class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                            <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                <div>
                                    <div class="flex justify-between">
                                        <h3 class="text-sm">
                                            <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Sepatu Sneakers</a>
                                        </h3>
                                    </div>
                                    <div class="mt-1 flex text-sm">
                                        <p class="text-gray-500">Putih, Ukuran 42</p>
                                    </div>
                                    <p class="mt-1 text-sm font-medium text-gray-900">Rp 450.000</p>
                                </div>

                                <div class="mt-4 sm:mt-0 sm:pr-9">
                                    <label for="quantity-1" class="sr-only">Quantity, Sepatu Sneakers</label>
                                    <select id="quantity-1" name="quantity-1" class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>

                                    <div class="absolute right-0 top-0">
                                        <button type="button" class="-m-2 inline-flex p-2 text-gray-400 hover:text-red-500">
                                            <span class="sr-only">Hapus</span>
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </section>

            <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-16 rounded-lg bg-white px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8 shadow-sm border border-gray-100">
                <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Ringkasan Pesanan</h2>

                <dl class="mt-6 space-y-4 text-sm text-gray-600">
                    <div class="flex items-center justify-between">
                        <dt>Subtotal</dt>
                        <dd class="text-gray-900 font-medium">Rp 1.700.000</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="flex items-center text-sm">
                            <span>Estimasi Ongkir</span>
                        </dt>
                        <dd class="text-gray-900 font-medium">Rp 50.000</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="flex text-sm">
                            <span>Pajak (PPN 11%)</span>
                        </dt>
                        <dd class="text-gray-900 font-medium">Rp 187.000</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4 text-base font-bold text-gray-900">
                        <dt>Total Bayar</dt>
                        <dd>Rp 1.937.000</dd>
                    </div>
                </dl>

                <div class="mt-6">
                    <button type="button" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50 transition-colors">
                        Lanjut ke Pembayaran
                    </button>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer Component -->
    <x-footer />

</body>
</html>
