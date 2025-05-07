<!-- Navbar -->
<header class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <div class="text-indigo-400 text-3xl font-bold">~</div>

            <!-- Nav Links -->
            <nav class="flex space-x-4">
                <a href="/" class="<?= urlIs('/') ? 'bg-gray-800 text-white font-medium' : '' ?> text-gray-300 hover:text-white px-3 py-2 rounded-md">Home</a>
                <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-800 text-white font-medium' : '' ?> text-gray-300 hover:text-white px-3 py-2 rounded-md">About</a>
                <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-800 text-white font-medium' : '' ?> text-gray-300 hover:text-white px-3 py-2 rounded-md">Notes</a>
                <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-800 text-white font-medium' : '' ?> text-gray-300 hover:text-white px-3 py-2 rounded-md">Contact</a>
            </nav>
        </div>

    <div class="flex items-center space-x-4 relative group">
            <!-- Notification Icon -->
            <button>
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 17h5l-1.405-1.405M19.595 12.595A2.121 2.121 0 0018.5 12h-13a2.121 2.121 0 00-1.095.405M4 17h5M4 12v-1a4 4 0 014-4h8a4 4 0 014 4v1" />
                </svg>
            </button>

            <!-- Profile Dropdown -->
            <div class="relative">
                <img class="h-8 w-8 rounded-full ring-2 ring-white cursor-pointer" src="https://i.pravatar.cc/150?img=3" alt="User Avatar">

                <!-- Dropdown on hover -->
                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 hidden group-hover:block z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</header>