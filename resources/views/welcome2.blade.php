<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">
    <!-- Gradient Header -->
    <header class="bg-gradient-to-r from-teal-800 to-teal-600 px-6 py-4 text-white shadow-lg">
        <div class="container mx-auto flex flex-col items-center justify-between md:flex-row">
            <div class="mb-4 flex items-center space-x-8 md:mb-0">
                <a href="#" class="bg-gradient-to-r from-amber-300 to-amber-200 bg-clip-text text-3xl font-bold tracking-tighter text-transparent">EventKu</a>
                <nav class="hidden space-x-8 text-lg md:flex">
                    <a href="#" class="font-medium transition-colors duration-200 hover:text-amber-200">Acara</a>
                    <a href="#" class="font-medium transition-colors duration-200 hover:text-amber-200">Atraksi</a>
                    <a href="#" class="font-medium transition-colors duration-200 hover:text-amber-200">Tentang</a>
                </nav>
            </div>

            <div class="mx-auto w-full max-w-2xl flex-grow px-4 md:w-auto md:px-0">
                <div class="relative">
                    <input type="text" placeholder="Cari event dan atraksi di sini..." class="w-full rounded-full py-3 pl-12 pr-6 text-gray-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
                    <svg class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 transform text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="mt-4 flex items-center space-x-6 md:mt-0">
                <a href="#" class="relative transition-colors duration-200 hover:text-amber-200">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span class="absolute -right-2 -top-2 flex h-5 w-5 items-center justify-center rounded-full bg-amber-500 text-xs font-bold">3</span>
                </a>
                <button class="rounded-full bg-gradient-to-r from-amber-500 to-amber-600 px-8 py-2.5 font-semibold text-white shadow-md transition-all duration-300 hover:from-amber-600 hover:to-amber-700 hover:shadow-lg">
                    Masuk
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="relative h-96 overflow-hidden bg-gradient-to-br from-teal-900 to-teal-700">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container relative mx-auto flex h-full items-center px-6">
            <div class="max-w-2xl text-white">
                <h1 class="mb-4 text-5xl font-bold leading-tight">Temukan Pengalaman Tak Terlupakan</h1>
                <p class="mb-8 text-xl">Ribuan event menarik menanti Anda. Mulai dari konser, workshop, hingga festival budaya.</p>
                <button class="rounded-full bg-amber-500 px-8 py-3 font-bold text-white shadow-lg transition-all hover:bg-amber-600 hover:shadow-xl">
                    Jelajahi Sekarang
                </button>
            </div>
        </div>
    </div>

    <main class="container mx-auto px-4 py-12">
        <!-- Filter Section -->
        <section class="mb-12 rounded-xl bg-white p-6 shadow-lg">
            <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0">
                <h2 class="text-2xl font-bold text-gray-800">Acara Terdekat</h2>

                <div class="flex w-full flex-col space-y-4 md:w-auto md:flex-row md:space-x-4 md:space-y-0">
                    <div class="relative w-full md:w-48">
                        <select class="block w-full appearance-none rounded-xl border-0 bg-gray-100 px-4 py-3 pr-8 text-gray-700 focus:ring-2 focus:ring-amber-400">
                            <option>Pilih Tanggal</option>
                            <option>Hari Ini</option>
                            <option>Minggu Ini</option>
                            <option>Bulan Ini</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative w-full md:w-48">
                        <select class="block w-full appearance-none rounded-xl border-0 bg-gray-100 px-4 py-3 pr-8 text-gray-700 focus:ring-2 focus:ring-amber-400">
                            <option>Urutkan</option>
                            <option>Terbaru</option>
                            <option>Terpopuler</option>
                            <option>Harga Terendah</option>
                            <option>Harga Tertinggi</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative w-full md:w-64">
                        <input type="text" placeholder="Cari acara..." class="w-full rounded-xl border-0 bg-gray-100 px-4 py-3 pl-10 pr-4 text-gray-700 focus:ring-2 focus:ring-amber-400">
                        <svg class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 transform text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events Grid -->
        <section>
            <div class="mb-8 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-gray-800">18 Acara Tersedia</h3>
                <div class="flex space-x-2">
                    <button class="rounded-lg bg-gray-200 p-2 hover:bg-gray-300">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </button>
                    <button class="rounded-lg bg-amber-500 p-2 text-white hover:bg-amber-600">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- Event Card 1 -->
                <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="https://placehold.co/600x400/AEC6CF/000000?text=Women+Fest" alt="Event Poster" class="h-56 w-full object-cover">
                        <div class="absolute bottom-0 left-0 bg-amber-500 px-3 py-1 text-sm font-bold text-white">
                            Trending
                        </div>
                        <button class="absolute right-4 top-4 rounded-full bg-white/90 p-2 text-gray-800 hover:bg-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="mb-2 flex items-center justify-between">
                            <span class="rounded-full bg-teal-100 px-3 py-1 text-xs font-semibold text-teal-800">Workshop</span>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                                1.2k
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Women Festive "Soul to Allah"</h3>
                        <div class="mb-3 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Jakarta Convention Center</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>02 - 03 Apr 2025 • 09:00 WIB</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">Rp299.000</span>
                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-800">Tersedia</span>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="https://placehold.co/600x400/FAC898/000000?text=Music+Fest" alt="Event Poster" class="h-56 w-full object-cover">
                        <div class="absolute bottom-0 left-0 bg-purple-500 px-3 py-1 text-sm font-bold text-white">
                            Baru
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="mb-2 flex items-center justify-between">
                            <span class="rounded-full bg-purple-100 px-3 py-1 text-xs font-semibold text-purple-800">Konser</span>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                                856
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Java Jazz Festival 2025</h3>
                        <div class="mb-3 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>JCC, Jakarta</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>10 - 12 Mei 2025 • 18:00 WIB</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">Rp899.000</span>
                            <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-800">Hampir Habis</span>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="https://placehold.co/600x400/CCCCFF/000000?text=Tech+Summit" alt="Event Poster" class="h-56 w-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="mb-2 flex items-center justify-between">
                            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-800">Konferensi</span>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                                432
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Indonesia Tech Summit 2025</h3>
                        <div class="mb-3 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>BSD City, Tangerang</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>15 Jul 2025 • 08:00 WIB</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">Rp1.499.000</span>
                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-800">Tersedia</span>
                        </div>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="https://placehold.co/600x400/FFCCCC/000000?text=Food+Fest" alt="Event Poster" class="h-56 w-full object-cover">
                        <div class="absolute bottom-0 left-0 bg-red-500 px-3 py-1 text-sm font-bold text-white">
                            Diskon 30%
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="mb-2 flex items-center justify-between">
                            <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-800">Kuliner</span>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                                1.5k
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Jakarta Food Festival</h3>
                        <div class="mb-3 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Lapangan Monas, Jakarta</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-2 h-5 w-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>22 - 24 Ags 2025 • 10:00 WIB</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="mr-2 text-lg font-bold text-gray-900">Rp150.000</span>
                                <span class="text-sm text-gray-500 line-through">Rp200.000</span>
                            </div>
                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-800">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex items-center justify-between">
                <button class="flex items-center space-x-2 rounded-lg border border-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-100">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Sebelumnya</span>
                </button>
                <div class="flex space-x-2">
                    <button class="h-10 w-10 rounded-lg bg-amber-500 font-medium text-white">1</button>
                    <button class="h-10 w-10 rounded-lg font-medium text-gray-700 hover:bg-gray-100">2</button>
                    <button class="h-10 w-10 rounded-lg font-medium text-gray-700 hover:bg-gray-100">3</button>
                    <span class="flex items-end px-2">...</span>
                    <button class="h-10 w-10 rounded-lg font-medium text-gray-700 hover:bg-gray-100">8</button>
                </div>
                <button class="flex items-center space-x-2 rounded-lg border border-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-100">
                    <span>Berikutnya</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="mt-16">
            <h2 class="mb-8 text-2xl font-bold text-gray-800">Jelajahi Kategori</h2>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                <a href="#" class="flex flex-col items-center rounded-xl bg-white p-6 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-purple-100 text-purple-600">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Musik</span>
                </a>
                <a href="#" class="flex flex-col items-center rounded-xl bg-white p-6 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-blue-100 text-blue-600">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Workshop</span>
                </a>
                <a href="#" class="flex flex-col items-center rounded-xl bg-white p-6 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-green-100 text-green-600">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Jaringan</span>
                </a>
                <a href="#" class="flex flex-col items-center rounded-xl bg-white p-6 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-red-100 text-red-600">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Pameran</span>
                </a>
                <a href="#" class="flex flex-col items-center rounded-xl bg-white p-6 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-yellow-100 text-yellow-600">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Seni</span>
                </a>
                <a href="#" class="flex flex-col items-center rounded-xl bg-white p-6 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Olahraga</span>
                </a>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="mt-16 rounded-2xl bg-gradient-to-r from-teal-700 to-teal-500 p-8 text-white shadow-xl">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="mb-4 text-3xl font-bold">Dapatkan Info Event Terbaru</h2>
                <p class="mb-6 text-lg">Berlangganan newsletter kami untuk mendapatkan update event menarik langsung ke email Anda.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
                    <input type="email" placeholder="Alamat email Anda" class="flex-grow rounded-full px-6 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-amber-400">
                    <button class="rounded-full bg-amber-500 px-8 py-3 font-bold text-white transition-all hover:bg-amber-600 hover:shadow-lg">
                        Berlangganan
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="mt-16 bg-gray-900 text-gray-300">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <h3 class="mb-6 text-xl font-bold text-white">EventKu</h3>
                    <p class="mb-4">Platform pencarian event terbesar di Indonesia. Temukan pengalaman tak terlupakan bersama kami.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="mb-6 text-lg font-semibold uppercase text-white">Tautan Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="transition-colors hover:text-amber-400">Acara Populer</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Acara Mendatang</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Promo Spesial</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Mitra Kami</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Blog</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-6 text-lg font-semibold uppercase text-white">Kategori</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="transition-colors hover:text-amber-400">Konser Musik</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Workshop</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Festival</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Olahraga</a></li>
                        <li><a href="#" class="transition-colors hover:text-amber-400">Pameran</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-6 text-lg font-semibold uppercase text-white">Kontak</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="mr-3 mt-1 h-5 w-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Jl. Sudirman No. 123, Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="mr-3 h-5 w-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <span>+62 21 1234 5678</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="mr-3 h-5 w-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span>info@eventku.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 border-t border-gray-800 pt-8 text-center">
                <p>&copy; 2025 EventKu. All rights reserved. | <a href="#" class="transition-colors hover:text-amber-400">Kebijakan Privasi</a> | <a href="#" class="transition-colors hover:text-amber-400">Syarat & Ketentuan</a></p>
            </div>
        </div>
    </footer>

</body>

</html>
