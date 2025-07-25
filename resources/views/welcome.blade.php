<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .custom-shadow {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        .event-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="min-h-screen">
    <header class="bg-[#0F766E] px-6 py-4 text-white md:px-12">
        <div class="container mx-auto flex flex-col items-center justify-between md:flex-row">
            <div class="mb-4 flex items-center space-x-4 md:mb-0">
                <a href="#" class="text-2xl font-bold">EventKu</a>
                <nav class="hidden space-x-6 text-lg md:flex">
                    <a href="#" class="hover:text-gray-200 transition-colors">Acara</a>
                    <a href="#" class="hover:text-gray-200 transition-colors">Atraksi</a>
                </nav>
            </div>
            <div class="mx-auto w-full max-w-2xl flex-grow md:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Cari event dan atraksi di sini..." class="w-full rounded-full py-2 pl-10 pr-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#67e8f9] bg-white/90">
                    <svg class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 transform text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 flex items-center space-x-4 md:mt-0">
                <a href="#" class="hover:text-gray-200 transition-colors">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </a>
                <button class="rounded-full bg-[#F97316] px-6 py-2 font-semibold text-white transition duration-300 ease-in-out hover:bg-orange-600">Masuk</button>
            </div>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">
        <section class="mb-8">
            <div class="custom-shadow rounded-lg bg-[#475569] p-6">
                <h1 class="mb-6 text-center text-3xl font-bold text-white">Event</h1>
                <div class="flex flex-col items-center justify-between space-y-4 md:flex-row md:space-x-4 md:space-y-0">
                    <div class="relative w-full md:w-1/3">
                        <select class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-8 leading-tight text-gray-700 focus:border-[#3B82F6] focus:bg-white focus:outline-none">
                            <option>Pilih Tanggal</option>
                            <option>Hari Ini</option>
                            <option>Minggu Ini</option>
                            <option>Bulan Ini</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative w-full md:w-1/3">
                        <select class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-8 leading-tight text-gray-700 focus:border-[#3B82F6] focus:bg-white focus:outline-none">
                            <option>Urutan</option>
                            <option>Terbaru</option>
                            <option>Terpopuler</option>
                            <option>Harga Terendah</option>
                            <option>Harga Tertinggi</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="mb-6 flex flex-col items-center justify-between md:flex-row">
                <p class="mb-4 text-lg text-gray-700 md:mb-0">Menampilkan 1 sampai 18 dari 18 event.</p>
                <div class="relative w-full md:w-auto">
                    <input type="text" placeholder="Search here..." class="w-full rounded-lg border border-gray-300 py-2 pl-10 pr-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#67e8f9]">
                    <svg class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 transform text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="custom-shadow overflow-hidden rounded-lg bg-white transition-shadow duration-300 hover:shadow-lg event-card">
                    <div class="relative">
                        <img src="https://picsum.photos/seed/event1/400/250.jpg" alt="Event Poster" class="h-48 w-full object-cover">
                        <div class="absolute top-2 right-2 bg-[#F97316] text-white text-xs font-bold px-2 py-1 rounded">NEW</div>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 truncate text-lg font-semibold text-gray-900">Women Festive "Soul to Allah"</h3>
                        <div class="mb-2 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>DKI Jakarta</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>02 - 03 Apr 2025</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-md font-bold text-[#3B82F6]">Mulai dari Rp. 299.000</span>
                            <span class="text-sm font-medium text-[#10B981]">Tiket Tersedia</span>
                        </div>
                    </div>
                </div>

                <div class="custom-shadow overflow-hidden rounded-lg bg-white transition-shadow duration-300 hover:shadow-lg event-card">
                    <div class="relative">
                        <img src="https://picsum.photos/seed/event2/400/250.jpg" alt="Event Poster" class="h-48 w-full object-cover">
                        <div class="absolute top-2 right-2 bg-[#10B981] text-white text-xs font-bold px-2 py-1 rounded">POPULAR</div>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 truncate text-lg font-semibold text-gray-900">Tech Conference 2025</h3>
                        <div class="mb-2 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Jawa Barat</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>15 - 17 Mei 2025</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-md font-bold text-[#3B82F6]">Mulai dari Rp. 1.500.000</span>
                            <span class="text-sm font-medium text-[#10B981]">Tiket Tersedia</span>
                        </div>
                    </div>
                </div>

                <div class="custom-shadow overflow-hidden rounded-lg bg-white transition-shadow duration-300 hover:shadow-lg event-card">
                    <div class="relative">
                        <img src="https://picsum.photos/seed/event3/400/250.jpg" alt="Event Poster" class="h-48 w-full object-cover">
                        <div class="absolute top-2 right-2 bg-[#8B5CF6] text-white text-xs font-bold px-2 py-1 rounded">LIMITED</div>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 truncate text-lg font-semibold text-gray-900">Music Festival Summer 2025</h3>
                        <div class="mb-2 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>DKI Jakarta</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>28 Jun - 30 Jun 2025</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-md font-bold text-[#3B82F6]">Mulai dari Rp. 499.000</span>
                            <span class="text-sm font-medium text-[#10B981]">Tiket Tersedia</span>
                        </div>
                    </div>
                </div>

                <div class="custom-shadow overflow-hidden rounded-lg bg-white transition-shadow duration-300 hover:shadow-lg event-card">
                    <div class="relative">
                        <img src="https://picsum.photos/seed/event4/400/250.jpg" alt="Event Poster" class="h-48 w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 truncate text-lg font-semibold text-gray-900">Food & Beverage Expo</h3>
                        <div class="mb-2 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Jawa Tengah</span>
                        </div>
                        <div class="mb-4 flex items-center text-sm text-gray-600">
                            <svg class="mr-1 h-4 w-4 text-[#3B82F6]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>10 - 12 Jul 2025</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-md font-bold text-[#3B82F6]">Mulai dari Rp. 150.000</span>
                            <span class="text-sm font-medium text-[#10B981]">Tiket Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="mt-8 bg-gray-800 py-6 text-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <div>
                    <h3 class="mb-4 text-xl font-bold">EventKu</h3>
                    <p class="text-gray-400">Temukan event terbaik di Indonesia dengan harga terjangkau.</p>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">Tentang Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Tentang</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">Bantuan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>support@eventku.com</li>
                        <li>+62 811-2222-333</li>
                        <div class="flex space-x-4 mt-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                </svg>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; 2025 EventKu. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
