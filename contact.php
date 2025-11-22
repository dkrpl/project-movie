<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    
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
                    <a href="contact.php" class="nav-link hover:text-purple-400 transition">Contact-Us</a>
                </div>
                <button class="glass px-4 py-2 rounded-full hover:bg-purple-600 hover:bg-opacity-50 transition">
                    Sign In
                </button>
            </div>
        </div>
    </nav>
    <div class="max-w-6xl mx-auto fade-in pt-32">
        <!-- Header -->
        <div class="text-center mb-12 floating">
            <h1 class="text-5xl md:text-7xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-500 to-purple-600 mb-4">
                Get in Touch
            </h1>
            <p class="text-gray-300 text-lg md:text-xl">Kami siap membantu Anda kapan saja</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="glass-strong rounded-3xl p-8 shadow-2xl fade-in">
                <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="text-4xl">✉️</span>
                    Kirim Pesan
                </h2>
                
                <form class="space-y-6">
                    <div>
                        <label class="block text-gray-300 mb-2 font-medium">Nama Lengkap</label>
                        <input type="text" 
                               class="w-full px-4 py-3 rounded-xl glass text-white input-glow transition-all duration-300"
                               placeholder="Masukkan nama Anda">
                    </div>

                    <div>
                        <label class="block text-gray-300 mb-2 font-medium">Email</label>
                        <input type="email" 
                               class="w-full px-4 py-3 rounded-xl glass text-white input-glow transition-all duration-300"
                               placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="block text-gray-300 mb-2 font-medium">No. Telepon</label>
                        <input type="tel" 
                               class="w-full px-4 py-3 rounded-xl glass text-white input-glow transition-all duration-300"
                               placeholder="+62 xxx xxxx xxxx">
                    </div>

                    <div>
                        <label class="block text-gray-300 mb-2 font-medium">Pesan</label>
                        <textarea rows="5" 
                                  class="w-full px-4 py-3 rounded-xl glass text-white input-glow transition-all duration-300 resize-none"
                                  placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full py-4 rounded-xl font-bold text-white text-lg bg-gradient-to-r from-purple-600 to-pink-600 btn-hover transition-all duration-300">
                        Kirim Pesan 🚀
                    </button>
                </form>
            </div>

            <!-- Contact Info & Social -->
            <div class="space-y-8">
                <!-- Contact Cards -->
                <div class="glass-strong rounded-3xl p-8 shadow-2xl fade-in">
                    <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="text-4xl">📞</span>
                        Hubungi Kami
                    </h2>
                    
                    <div class="space-y-5">
                        <div class="glass rounded-2xl p-5 hover:bg-opacity-60 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="text-3xl">📧</div>
                                <div>
                                    <p class="text-gray-400 text-sm">Email</p>
                                    <p class="text-white font-semibold">contact@example.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="glass rounded-2xl p-5 hover:bg-opacity-60 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="text-3xl">📱</div>
                                <div>
                                    <p class="text-gray-400 text-sm">Telepon</p>
                                    <p class="text-white font-semibold">+62 812 3456 7890</p>
                                </div>
                            </div>
                        </div>

                        <div class="glass rounded-2xl p-5 hover:bg-opacity-60 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="text-3xl">📍</div>
                                <div>
                                    <p class="text-gray-400 text-sm">Alamat</p>
                                    <p class="text-white font-semibold">Kediri, Jawa Timur, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="glass-strong rounded-3xl p-8 shadow-2xl fade-in">
                    <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="text-4xl">🌐</span>
                        Media Sosial
                    </h2>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass rounded-2xl p-6 text-center social-card transition-all duration-300 cursor-pointer">
                            <div class="text-4xl mb-2">💼</div>
                            <p class="text-white font-semibold">LinkedIn</p>
                        </div>

                        <div class="glass rounded-2xl p-6 text-center social-card transition-all duration-300 cursor-pointer">
                            <div class="text-4xl mb-2">📷</div>
                            <p class="text-white font-semibold">Instagram</p>
                        </div>

                        <div class="glass rounded-2xl p-6 text-center social-card transition-all duration-300 cursor-pointer">
                            <div class="text-4xl mb-2">🐦</div>
                            <p class="text-white font-semibold">Twitter</p>
                        </div>

                        <div class="glass rounded-2xl p-6 text-center social-card transition-all duration-300 cursor-pointer">
                            <div class="text-4xl mb-2">📘</div>
                            <p class="text-white font-semibold">Facebook</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 text-center">
            <p class="text-gray-400">© 2024 Your Company. Made with 💜 in Indonesia</p>
        </div>
    </div>
</body>
</html>