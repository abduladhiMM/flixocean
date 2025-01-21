<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <!-- Header -->
    <header class="fixed top-0 w-full bg-transparent backdrop-blur-md z-10">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <div class="text-2xl font-bold">
                <a href="/" class="text-white hover:text-gray-300">
                    <img src="/path-to-logo.gif" alt="FlixOcean Logo" class="h-8">
                </a>
            </div>
            <nav class="flex items-center space-x-6">
                <a href="/" class="hover:text-gray-300">Home</a>
                <div class="relative group">
                    <button class="hover:text-gray-300">Genre</button>
                    <div class="absolute hidden group-hover:block bg-gray-800 text-white py-2 mt-2 rounded shadow-lg">
                        <a href="/genre/action" class="block px-4 py-2 hover:bg-gray-700">Action</a>
                        <a href="/genre/drama" class="block px-4 py-2 hover:bg-gray-700">Drama</a>
                        <a href="/genre/comedy" class="block px-4 py-2 hover:bg-gray-700">Comedy</a>
                        <a href="/genre/horror" class="block px-4 py-2 hover:bg-gray-700">Horror</a>
                    </div>
                </div>
                <a href="profil.php" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" title="Go to profile page">Login</a>
            </nav>
        </div>
    </header>

    <!-- Content Section -->
    <main class="mt-20">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-6">Welcome to FlixOcean</h1>
            <p class="text-gray-300 mb-4">Stream your favorite movies and series anytime, anywhere.</p>

            <!-- Movies Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Movie Card -->
                <div class="bg-gray-800 rounded overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Movie Title</h3>
                        <p class="text-gray-400">Genre: Action</p>
                    </div>
                </div>
                <!-- Repeat movie cards as needed -->
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 mt-10 py-6">
        <div class="container mx-auto text-center text-gray-400">
            <p>&copy; 2025 Streamify. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
