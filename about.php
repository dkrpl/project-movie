<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Movie Streaming</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }

        .glass {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-strong {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .movie-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .movie-card:hover {
            transform: translateY(-10px);
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 20px 40px rgba(139, 92, 246, 0.3);
        }

        .banner-gradient {
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.9) 100%);
        }

        .shimmer {
            background: linear-gradient(90deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.05) 100%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .search-glow:focus {
            box-shadow: 0 0 20px rgba(139, 92, 246, 0.6);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .page-content {
            display: none;
        }

        .page-content.active {
            display: block;
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #8b5cf6, #ec4899);
            border-radius: 2px;
        }

        .category-card:hover {
            transform: scale(1.05);
            transition: all 0.3s ease;
        }

        .gradient-text {
            background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }

        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(139, 92, 246, 0.4); }
            50% { box-shadow: 0 0 40px rgba(139, 92, 246, 0.8); }
        }
    </style>
</head>
<body class="text-white">
    <!-- Navbar -->
    <nav class="glass-strong fixed w-full top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 cursor-pointer" onclick="showPage('home')">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm12.553 1.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                    </svg>
                    <span class="text-2xl font-bold bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">CineGlass</span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#" onclick="showPage('home')" class="nav-link active hover:text-purple-400 transition" data-page="home">Home</a>
                    <a href="#" onclick="showPage('movies')" class="nav-link hover:text-purple-400 transition" data-page="movies">Movies</a>
                    <a href="#" onclick="showPage('tv-series')" class="nav-link hover:text-purple-400 transition" data-page="tv-series">TV Series</a>
                    <a href="#" class="nav-link hover:text-purple-400 transition">About</a>
                    <a href="#" class="nav-link hover:text-purple-400 transition">Contact-Us</a>
                </div>
                <button class="glass px-4 py-2 rounded-full hover:bg-purple-600 hover:bg-opacity-50 transition">
                    Sign In
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full blur-3xl floating"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-pink-500 rounded-full blur-3xl floating" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center fade-in">
                <h1 class="text-6xl md:text-7xl font-black mb-6">
                    Tentang <span class="gradient-text">Kami</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Platform streaming terdepan yang menghadirkan ribuan film berkualitas tinggi untuk hiburan Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="glass-strong rounded-2xl p-8 text-center pulse-glow">
                    <div class="text-5xl font-black gradient-text mb-2">10K+</div>
                    <div class="text-gray-400 font-medium">Film Tersedia</div>
                </div>
                <div class="glass-strong rounded-2xl p-8 text-center pulse-glow" style="animation-delay: 0.2s;">
                    <div class="text-5xl font-black gradient-text mb-2">500K+</div>
                    <div class="text-gray-400 font-medium">Pengguna Aktif</div>
                </div>
                <div class="glass-strong rounded-2xl p-8 text-center pulse-glow" style="animation-delay: 0.4s;">
                    <div class="text-5xl font-black gradient-text mb-2">50+</div>
                    <div class="text-gray-400 font-medium">Negara</div>
                </div>
                <div class="glass-strong rounded-2xl p-8 text-center pulse-glow" style="animation-delay: 0.6s;">
                    <div class="text-5xl font-black gradient-text mb-2">4.9/5</div>
                    <div class="text-gray-400 font-medium">Rating Pengguna</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="glass-strong rounded-3xl p-1 overflow-hidden">
                    <div class="relative h-96 rounded-3xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1574267432644-f74c0cad9b9f?w=800" alt="Cinema" class="w-full h-full object-cover">
                        <div class="banner-gradient absolute inset-0"></div>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <h2 class="text-4xl md:text-5xl font-black">
                        Cerita <span class="gradient-text">Kami</span>
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Dimulai pada tahun 2020, kami memiliki visi untuk menghadirkan pengalaman menonton film yang luar biasa kepada semua orang. Dengan teknologi streaming terdepan dan koleksi konten yang terus berkembang, kami berkomitmen untuk menjadi platform hiburan pilihan Anda.
                    </p>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Hari ini, kami melayani jutaan pengguna di seluruh dunia dengan ribuan judul film dari berbagai genre dan bahasa. Perjalanan kami baru saja dimulai, dan kami terus berinovasi untuk memberikan yang terbaik.
                    </p>
                    <button class="glass-strong px-8 py-4 rounded-full font-semibold hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300 shadow-lg">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black mb-4">
                    Mengapa Memilih <span class="gradient-text">Kami?</span>
                </h2>
                <p class="text-gray-400 text-lg">Pengalaman menonton terbaik dengan fitur unggulan</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-strong rounded-2xl p-8 category-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Kualitas 4K Ultra HD</h3>
                    <p class="text-gray-400 leading-relaxed">Nikmati film dengan kualitas gambar terbaik hingga resolusi 4K dan audio Dolby Atmos yang memukau.</p>
                </div>

                <div class="glass-strong rounded-2xl p-8 category-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Multi-Device</h3>
                    <p class="text-gray-400 leading-relaxed">Tonton di TV, laptop, tablet, atau smartphone. Lanjutkan menonton dari perangkat mana saja.</p>
                </div>

                <div class="glass-strong rounded-2xl p-8 category-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Download & Tonton Offline</h3>
                    <p class="text-gray-400 leading-relaxed">Unduh film favorit Anda dan tonton kapan saja tanpa koneksi internet.</p>
                </div>

                <div class="glass-strong rounded-2xl p-8 category-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Loading Super Cepat</h3>
                    <p class="text-gray-400 leading-relaxed">Teknologi CDN global memastikan streaming lancar tanpa buffering.</p>
                </div>

                <div class="glass-strong rounded-2xl p-8 category-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Rekomendasi Personal</h3>
                    <p class="text-gray-400 leading-relaxed">AI kami mempelajari preferensi Anda untuk memberikan rekomendasi film yang sempurna.</p>
                </div>

                <div class="glass-strong rounded-2xl p-8 category-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Profil Keluarga</h3>
                    <p class="text-gray-400 leading-relaxed">Buat hingga 5 profil dengan rekomendasi dan riwayat tontonan terpisah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black mb-4">
                    Tim <span class="gradient-text">Kami</span>
                </h2>
                <p class="text-gray-400 text-lg">Orang-orang hebat di balik kesuksesan kami</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="glass-strong rounded-2xl p-6 text-center category-card">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-purple-500">
                        <img src="https://i.pravatar.cc/150?img=12" alt="CEO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Budi Santoso</h3>
                    <p class="text-purple-400 font-semibold mb-2">CEO & Founder</p>
                    <p class="text-gray-400 text-sm">Visioner di balik platform kami</p>
                </div>

                <div class="glass-strong rounded-2xl p-6 text-center category-card">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-pink-500">
                        <img src="https://i.pravatar.cc/150?img=32" alt="CTO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Siti Rahma</h3>
                    <p class="text-pink-400 font-semibold mb-2">CTO</p>
                    <p class="text-gray-400 text-sm">Arsitek teknologi streaming kami</p>
                </div>

                <div class="glass-strong rounded-2xl p-6 text-center category-card">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://i.pravatar.cc/150?img=33" alt="CMO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Andi Wijaya</h3>
                    <p class="text-blue-400 font-semibold mb-2">CMO</p>
                    <p class="text-gray-400 text-sm">Strategi pemasaran & branding</p>
                </div>

                <div class="glass-strong rounded-2xl p-6 text-center category-card">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-green-500">
                        <img src="https://i.pravatar.cc/150?img=44" alt="COO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Dewi Lestari</h3>
                    <p class="text-green-400 font-semibold mb-2">COO</p>
                    <p class="text-gray-400 text-sm">Operasional & kemitraan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="glass-strong rounded-3xl p-12 md:p-16 text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 right-0 w-96 h-96 bg-pink-500 rounded-full blur-3xl"></div>
                </div>
                
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-5xl font-black mb-6">
                        Siap Memulai Petualangan <span class="gradient-text">Sinematik</span> Anda?
                    </h2>
                    <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                        Bergabunglah dengan jutaan pengguna yang sudah menikmati pengalaman menonton terbaik
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-gradient-to-r from-purple-500 to-pink-500 px-10 py-4 rounded-full font-bold text-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            Mulai Gratis 30 Hari
                        </button>
                        <button class="glass-strong px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                            Lihat Paket Harga
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="glass-strong py-12 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold gradient-text">MovieStream</span>
                    </div>
                    <p class="text-gray-400 text-sm">Platform streaming film terbaik untuk hiburan keluarga Anda.</p>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Press</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Bantuan</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-white transition">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Status Layanan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Legal</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">Privasi</a></li>
                        <li><a href="#" class="hover:text-white transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-white transition">Cookie Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Lisensi</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2024 MovieStream. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004