<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineGlass - Modern Movie Portal</title>
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
                <a href="login.php">
                <button class="glass px-4 py-2 rounded-full hover:bg-purple-600 hover:bg-opacity-50 transition">
                    Login
                </button>
            </div>
        </div>
    </nav>

    <!-- HOME PAGE -->
    <div id="home-page" class="page-content active">
        <!-- Banner Section -->
        <div id="banner-section" class="relative h-screen mt-16 overflow-hidden">
            <div id="banner-content" class="shimmer h-full"></div>
        </div>

        <!-- Search Section -->
        <div class="container mx-auto px-4 -mt-20 relative z-10">
            <div class="glass-strong rounded-3xl p-8 shadow-2xl">
                <h2 class="text-3xl font-bold mb-6 text-center">Cari Film Favorit Anda</h2>
                <div class="flex flex-col md:flex-row gap-4">
                    <input 
                        type="text" 
                        id="searchInput" 
                        placeholder="Masukkan judul film..."
                        class="flex-1 glass-strong px-6 py-4 rounded-2xl focus:outline-none search-glow text-white placeholder-gray-300"
                    >
                   <button 
                        onclick="performSearch()" 
                        class="glass-strong px-8 py-4 rounded-2xl hover:bg-purple-600 hover:bg-opacity-50 transition font-semibold flex items-center gap-2">
                        
                        <i data-lucide="search" class="w-5 h-5"></i>
                        Cari
                    </button>
                </div>
            </div>
        </div>

        <!-- Popular Movies -->
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-bold mb-8 flex items-center gap-2">
                <i data-lucide="flame" class="w-8 h-8 text-red-500"></i>
                Trending Now
            </h2>
            <div id="popular-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                <div class="glass rounded-2xl overflow-hidden shimmer h-96"></div>
                <div class="glass rounded-2xl overflow-hidden shimmer h-96"></div>
                <div class="glass rounded-2xl overflow-hidden shimmer h-96"></div>
                <div class="glass rounded-2xl overflow-hidden shimmer h-96"></div>
                <div class="glass rounded-2xl overflow-hidden shimmer h-96"></div>
            </div>
        </div>

        <!-- Categories -->
        <div class="container mx-auto px-4 pb-16">
            <h2 class="text-4xl font-bold mb-8 flex items-center gap-2">
                <i data-lucide="film" class="w-8 h-8"></i>
                Browse by Category
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <!-- Action -->
                <div class="glass category-card rounded-2xl p-8 text-center cursor-pointer" onclick="searchByCategory('action')">
                    <i data-lucide="bomb" class="w-14 h-14 mx-auto mb-4"></i>
                    <h3 class="text-xl font-bold">Action</h3>
                </div>

                <!-- Comedy -->
                <div class="glass category-card rounded-2xl p-8 text-center cursor-pointer" onclick="searchByCategory('comedy')">
                    <i data-lucide="laugh" class="w-14 h-14 mx-auto mb-4"></i>
                    <h3 class="text-xl font-bold">Comedy</h3>
                </div>

                <!-- Horror -->
                <div class="glass category-card rounded-2xl p-8 text-center cursor-pointer" onclick="searchByCategory('horror')">
                    <i data-lucide="ghost" class="w-14 h-14 mx-auto mb-4"></i>
                    <h3 class="text-xl font-bold">Horror</h3>
                </div>

                <!-- Romance -->
                <div class="glass category-card rounded-2xl p-8 text-center cursor-pointer" onclick="searchByCategory('romance')">
                    <i data-lucide="heart" class="w-14 h-14 mx-auto mb-4"></i>
                    <h3 class="text-xl font-bold">Romance</h3>
                </div>

            </div>
        </div>

    </div>

    <!-- MOVIES PAGE -->
    <div id="movies-page" class="page-content mt-16">
        <div class="container mx-auto px-4 py-16">
            <div class="fade-in">
                <h1 class="text-5xl font-bold mb-4 flex items-center gap-3">
                    <i data-lucide="film" class="w-10 h-10"></i>
                    All Movies
                </h1>
                <p class="text-gray-400 mb-8">Explore our vast collection of movies</p>
                
                <!-- Search Bar -->
                <div class="glass-strong rounded-2xl p-6 mb-8">
                    <div class="flex gap-4">
                        <input 
                            type="text" 
                            id="movieSearchInput" 
                            placeholder="Search movies..."
                            class="flex-1 glass px-6 py-3 rounded-xl focus:outline-none search-glow text-white placeholder-gray-300"
                        >
                        <button 
                            onclick="searchMovies()" 
                            class="glass px-6 py-3 rounded-xl hover:bg-purple-600 hover:bg-opacity-50 transition font-semibold">
                            Search
                        </button>
                    </div>
                </div>

                <div id="movies-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mb-8"></div>
                <div id="movies-pagination" class="flex justify-center items-center space-x-2"></div>
            </div>
        </div>
    </div>

    <!-- TV SERIES PAGE -->
    <div id="tv-series-page" class="page-content mt-16">
        <div class="container mx-auto px-4 py-16">
            <div class="fade-in">
                <h1 class="text-5xl font-bold mb-4">📺 TV Series</h1>
                <p class="text-gray-400 mb-8">Discover amazing TV shows and series</p>
                
                <!-- Search Bar -->
                <div class="glass-strong rounded-2xl p-6 mb-8">
                    <div class="flex gap-4">
                        <input 
                            type="text" 
                            id="seriesSearchInput" 
                            placeholder="Search TV series..."
                            class="flex-1 glass px-6 py-3 rounded-xl focus:outline-none search-glow text-white placeholder-gray-300"
                        >
                        <button 
                            onclick="searchSeries()" 
                            class="glass px-6 py-3 rounded-xl hover:bg-purple-600 hover:bg-opacity-50 transition font-semibold">
                            Search
                        </button>
                    </div>
                </div>

                <div id="series-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mb-8"></div>
                <div id="series-pagination" class="flex justify-center items-center space-x-2"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="glass-strong mt-20 py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">CineGlass</h3>
                    <p class="text-gray-400">Your premium destination for movies and TV series.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" onclick="showPage('home')" class="hover:text-purple-400">Home</a></li>
                        <li><a href="#" onclick="showPage('movies')" class="hover:text-purple-400">Movies</a></li>
                        <li><a href="#" onclick="showPage('tv-series')" class="hover:text-purple-400">TV Series</a></li>
                        <li><a href="#" onclick="showPage('about')" class="hover:text-purple-400">About</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Categories</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-purple-400">Action</a></li>
                        <li><a href="#" class="hover:text-purple-400">Comedy</a></li>
                        <li><a href="#" class="hover:text-purple-400">Horror</a></li>
                        <li><a href="#" class="hover:text-purple-400">Romance</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">

                        <!-- Instagram -->
                        <a href="#" class="glass w-10 h-10 rounded-full flex items-center justify-center hover:bg-purple-600 hover:bg-opacity-50 transition">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="glass w-10 h-10 rounded-full flex items-center justify-center hover:bg-purple-600 hover:bg-opacity-50 transition">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>

                        <!-- Email -->
                        <a href="#" class="glass w-10 h-10 rounded-full flex items-center justify-center hover:bg-purple-600 hover:bg-opacity-50 transition">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </a>

                    </div>
                </div>

            </div>
            <div class="border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-400">© 2025 CineGlass. Powered by OMDb API</p>
                <p class="text-sm text-gray-500 mt-2">Made with ❤️ using Glassmorphism Design</p>
            </div>
        </div>
    </footer>

    <!-- Movie Modal -->
    <div id="movieModal" class="fixed inset-0 bg-black bg-opacity-80 hidden z-50 flex items-center justify-center p-4" onclick="closeModalOnBackdrop(event)">
        <div class="glass-strong rounded-3xl max-w-4xl w-full max-h-[90vh] overflow-y-auto p-8" onclick="event.stopPropagation()">
            <button onclick="closeModal()" class="float-right text-3xl hover:text-purple-300 transition">&times;</button>
            <div id="modalContent"></div>
        </div>
    </div>

    <script>
        // Global variables
        const popularMovies = ['Inception', 'The Dark Knight', 'Interstellar', 'Avengers', 'Avatar', 'Titanic', 'Gladiator', 'The Matrix', 'Joker', 'Parasite'];
        let currentPage = 1;
        let totalResults = 0;
        let currentSearchQuery = '';
        let currentSearchType = 'movie';

        // Initialize
        window.addEventListener('DOMContentLoaded', () => {
            loadBanner();
            loadPopularMovies();
            
            // Event listeners
            document.getElementById('searchInput').addEventListener('keypress', (e) => {
                if (e.key === 'Enter') performSearch();
            });
            
            document.getElementById('movieSearchInput').addEventListener('keypress', (e) => {
                if (e.key === 'Enter') searchMovies();
            });
            
            document.getElementById('seriesSearchInput').addEventListener('keypress', (e) => {
                if (e.key === 'Enter') searchSeries();
            });
        });

        // Page Navigation
        function showPage(pageName) {
            // Hide all pages
            document.querySelectorAll('.page-content').forEach(page => {
                page.classList.remove('active');
            });
            
            // Show selected page
            document.getElementById(pageName + '-page').classList.add('active');
            
            // Update nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`[data-page="${pageName}"]`).classList.add('active');
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Load content based on page
            if (pageName === 'movies') {
                loadMoviesPage();
            } else if (pageName === 'tv-series') {
                loadSeriesPage();
            }
        }

        // Load Banner
        async function loadBanner() {
            try {
                const response = await fetch(`api.php?action=search&s=The Dark Knight`);
                const data = await response.json();
                
                if (data.Search && data.Search[0]) {
                    const movie = data.Search[0];
                    const detailResponse = await fetch(`api.php?action=detail&i=${movie.imdbID}`);
                    const detail = await detailResponse.json();
                    
                    document.getElementById('banner-content').innerHTML = `
                        <div class="absolute inset-0">
                            <img src="${detail.Poster !== 'N/A' ? detail.Poster : 'https://via.placeholder.com/1920x1080?text=No+Image'}" 
                                 class="w-full h-full object-cover">
                            <div class="banner-gradient absolute inset-0"></div>
                        </div>
                        <div class="relative h-full flex items-end pb-20">
                            <div class="container mx-auto px-4">
                                <div class="max-w-2xl floating">
                                    <h1 class="text-6xl font-bold mb-4">${detail.Title}</h1>
                                    <div class="flex items-center space-x-4 mb-4">
                                        <span class="glass px-3 py-1 rounded-full">⭐ ${detail.imdbRating}</span>
                                        <span class="glass px-3 py-1 rounded-full">${detail.Year}</span>
                                        <span class="glass px-3 py-1 rounded-full">${detail.Runtime}</span>
                                    </div>
                                    <p class="text-lg mb-6 text-gray-200">${detail.Plot}</p>
                                    <button onclick="showMovieDetail('${detail.imdbID}')" class="glass-strong px-8 py-4 rounded-2xl hover:bg-purple-600 hover:bg-opacity-50 transition font-semibold text-lg">
                                        ▶ More Info
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                }
            } catch (error) {
                console.error('Error loading banner:', error);
            }
        }

        // Load Popular Movies
        async function loadPopularMovies() {
            const grid = document.getElementById('popular-grid');
            grid.innerHTML = '';
            
            for (const title of popularMovies) {
                try {
                    const response = await fetch(`api.php?action=search&s=${title}`);
                    const data = await response.json();
                    
                    if (data.Search && data.Search[0]) {
                        const movie = data.Search[0];
                        grid.innerHTML += createMovieCard(movie);
                    }
                } catch (error) {
                    console.error('Error loading movie:', error);
                }
            }
        }

        // Load Movies Page
        async function loadMoviesPage() {
            const grid = document.getElementById('movies-grid');
            grid.innerHTML = createLoadingSkeletons(10);
            
            const queries = ['Marvel', 'Batman', 'Star Wars', 'Harry Potter', 'Spider'];
            let allMovies = [];
            
            for (const query of queries) {
                try {
                    const response = await fetch(`api.php?action=search&s=${query}&type=movie`);
                    const data = await response.json();
                    if (data.Search) {
                        allMovies = allMovies.concat(data.Search.slice(0, 4));
                    }
                } catch (error) {
                    console.error('Error loading movies:', error);
                }
            }
            
            grid.innerHTML = '';
            allMovies.forEach(movie => {
                grid.innerHTML += createMovieCard(movie);
            });
        }

        // Load Series Page
        async function loadSeriesPage() {
            const grid = document.getElementById('series-grid');
            grid.innerHTML = createLoadingSkeletons(10);
            
            const queries = ['Breaking', 'Game of', 'Stranger', 'The Office', 'Friends'];
            let allSeries = [];
            
            for (const query of queries) {
                try {
                    const response = await fetch(`api.php?action=search&s=${query}&type=series`);
                    const data = await response.json();
                    if (data.Search) {
                        allSeries = allSeries.concat(data.Search.slice(0, 4));
                    }
                } catch (error) {
                    console.error('Error loading series:', error);
                }
            }
            
            grid.innerHTML = '';
            allSeries.forEach(series => {
                grid.innerHTML += createMovieCard(series);
            });
        }

        // Search Functions
        function performSearch() {
            const query = document.getElementById('searchInput').value;
            if (!query) return;
            
            showPage('movies');
            document.getElementById('movieSearchInput').value = query;
            searchMovies();
        }

        async function searchMovies(page = 1) {
            const query = document.getElementById('movieSearchInput').value;
            if (!query) return;
            
            currentSearchQuery = query;
            currentPage = page;
            currentSearchType = 'movie';
            
            const grid = document.getElementById('movies-grid');
            grid.innerHTML = '<div class="col-span-full text-center text-xl">Searching...</div>';
            
            try {
                const response = await fetch(`api.php?action=search&s=${query}&page=${page}&type=movie`);
                const data = await response.json();
                
                if (data.Search) {
                    totalResults = parseInt(data.totalResults) || 0;
                    grid.innerHTML = '';
                    data.Search.forEach(movie => {
                        grid.innerHTML += createMovieCard(movie);
                    });
                    renderPagination('movies-pagination');
                } else {
                    grid.innerHTML = '<div class="col-span-full text-center text-xl">No movies found</div>';
                    document.getElementById('movies-pagination').innerHTML = '';
                }
            } catch (error) {
                grid.innerHTML = '<div class="col-span-full text-center text-xl text-red-300">Error: ' + error + '</div>';
            }
        }

        async function searchSeries(page = 1) {
            const query = document.getElementById('seriesSearchInput').value;
            if (!query) return;
            
            currentSearchQuery = query;
            currentPage = page;
            currentSearchType = 'series';
            
            const grid = document.getElementById('series-grid');
            grid.innerHTML = '<div class="col-span-full text-center text-xl">Searching...</div>';
            
            try {
                const response = await fetch(`api.php?action=search&s=${query}&page=${page}&type=series`);
                const data = await response.json();
                
                if (data.Search) {
                    totalResults = parseInt(data.totalResults) || 0;
                    grid.innerHTML = '';
                    data.Search.forEach(series => {
                        grid.innerHTML += createMovieCard(series);
                    });
                    renderPagination('series-pagination');
                } else {
                    grid.innerHTML = '<div class="col-span-full text-center text-xl">No series found</div>';
                    document.getElementById('series-pagination').innerHTML = '';
                }
            } catch (error) {
                grid.innerHTML = '<div class="col-span-full text-center text-xl text-red-300">Error: ' + error + '</div>';
            }
        }

        function searchByCategory(category) {
            showPage('movies');
            document.getElementById('movieSearchInput').value = category;
            searchMovies();
        }

        // Create Movie Card
        function createMovieCard(movie) {
            return `
                <div class="glass movie-card rounded-2xl overflow-hidden shadow-xl" onclick="showMovieDetail('${movie.imdbID}')">
                    <img src="${movie.Poster !== 'N/A' ? movie.Poster : 'https://via.placeholder.com/300x450?text=No+Poster'}" 
                         class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2 truncate">${movie.Title}</h3>
                        <p class="text-gray-300 text-sm">${movie.Year}</p>
                        <span class="inline-block mt-2 glass px-2 py-1 rounded-full text-xs">${movie.Type}</span>
                    </div>
                </div>
            `;
        }

        // Loading Skeletons
        function createLoadingSkeletons(count) {
            let html = '';
            for (let i = 0; i < count; i++) {
                html += '<div class="glass rounded-2xl overflow-hidden shimmer h-96"></div>';
            }
            return html;
        }

        // Show Movie Detail
        async function showMovieDetail(imdbID) {
            document.getElementById('movieModal').classList.remove('hidden');
            document.getElementById('modalContent').innerHTML = '<div class="text-center shimmer h-96 rounded-2xl"></div>';
            
            try {
                const response = await fetch(`api.php?action=detail&i=${imdbID}`);
                const movie = await response.json();
                
                document.getElementById('modalContent').innerHTML = `
                    <div class="flex flex-col md:flex-row gap-6">
                        <img src="${movie.Poster !== 'N/A' ? movie.Poster : 'https://via.placeholder.com/300x450'}" 
                             class="w-full md:w-1/3 rounded-2xl shadow-2xl">
                        <div class="flex-1">
                            <h2 class="text-4xl font-bold mb-4">${movie.Title}</h2>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="glass px-3 py-1 rounded-full">⭐ ${movie.imdbRating}</span>
                                <span class="glass px-3 py-1 rounded-full">${movie.Year}</span>
                                <span class="glass px-3 py-1 rounded-full">${movie.Runtime}</span>
                                <span class="glass px-3 py-1 rounded-full">${movie.Rated}</span>
                            </div>
                            <p class="text-gray-200 mb-4">${movie.Plot}</p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Genre:</strong> ${movie.Genre}</p>
                                <p><strong>Director:</strong> ${movie.Director}</p>
                                <p><strong>Cast:</strong> ${movie.Actors}</p>
                                <p><strong>Writer:</strong> ${movie.Writer}</p>
                                <p><strong>Language:</strong> ${movie.Language}</p>
                                <p><strong>Country:</strong> ${movie.Country}</p>
                                <p><strong>Awards:</strong> ${movie.Awards}</p>
                                <p><strong>Box Office:</strong> ${movie.BoxOffice || 'N/A'}</p>
                            </div>
                            ${movie.Ratings && movie.Ratings.length > 0 ? `
                                <div class="mt-4">
                                    <strong>Ratings:</strong>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        ${movie.Ratings.map(rating => `
                                            <span class="glass px-3 py-1 rounded-full text-xs">
                                                ${rating.Source}: ${rating.Value}
                                            </span>
                                        `).join('')}
                                    </div>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                `;
            } catch (error) {
                document.getElementById('modalContent').innerHTML = '<div class="text-center text-red-300">Error loading movie details</div>';
            }
        }

        // Close Modal
        function closeModal() {
            document.getElementById('movieModal').classList.add('hidden');
        }

        function closeModalOnBackdrop(event) {
            if (event.target.id === 'movieModal') {
                closeModal();
            }
        }

        // Render Pagination
        function renderPagination(elementId) {
            const totalPages = Math.ceil(totalResults / 10);
            const pagination = document.getElementById(elementId);
            
            if (totalPages <= 1) {
                pagination.innerHTML = '';
                return;
            }
            
            let paginationHTML = '';
            
            // Previous button
            if (currentPage > 1) {
                paginationHTML += `
                    <button onclick="${currentSearchType === 'movie' ? 'searchMovies' : 'searchSeries'}(${currentPage - 1})" 
                            class="glass px-4 py-2 rounded-lg hover:bg-purple-600 hover:bg-opacity-50 transition">
                        ← Prev
                    </button>
                `;
            }
            
            // Page numbers
            const startPage = Math.max(1, currentPage - 2);
            const endPage = Math.min(totalPages, currentPage + 2);
            
            if (startPage > 1) {
                paginationHTML += `
                    <button onclick="${currentSearchType === 'movie' ? 'searchMovies' : 'searchSeries'}(1)" 
                            class="glass px-4 py-2 rounded-lg hover:bg-purple-600 hover:bg-opacity-50 transition">
                        1
                    </button>
                `;
                if (startPage > 2) {
                    paginationHTML += `<span class="px-2 text-gray-400">...</span>`;
                }
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const isActive = i === currentPage;
                paginationHTML += `
                    <button onclick="${currentSearchType === 'movie' ? 'searchMovies' : 'searchSeries'}(${i})" 
                            class="${isActive ? 'glass-strong bg-purple-600' : 'glass'} px-4 py-2 rounded-lg hover:bg-purple-600 hover:bg-opacity-50 transition font-semibold">
                        ${i}
                    </button>
                `;
            }
            
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationHTML += `<span class="px-2 text-gray-400">...</span>`;
                }
                paginationHTML += `
                    <button onclick="${currentSearchType === 'movie' ? 'searchMovies' : 'searchSeries'}(${totalPages})" 
                            class="glass px-4 py-2 rounded-lg hover:bg-purple-600 hover:bg-opacity-50 transition">
                        ${totalPages}
                    </button>
                `;
            }
            
            // Next button
            if (currentPage < totalPages) {
                paginationHTML += `
                    <button onclick="${currentSearchType === 'movie' ? 'searchMovies' : 'searchSeries'}(${currentPage + 1})" 
                            class="glass px-4 py-2 rounded-lg hover:bg-purple-600 hover:bg-opacity-50 transition">
                        Next →
                    </button>
                `;
            }
            
            pagination.innerHTML = paginationHTML;
        }
    </script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>