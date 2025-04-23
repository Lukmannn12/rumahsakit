<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-poppins">

    <header class="bg-white shadow">
        <nav class="container mx-auto px-4 py-5 flex items-center justify-between">
            <!-- Brand -->
            <div class="text-xl font-bold text-gray-800">MyWebsite</div>

            <!-- Center Menu -->
            <div class="hidden md:flex flex-1 justify-center">
                <ul class="flex space-x-6 text-gray-700 text-sm">
                    <li><a href="#" class="hover:text-blue-500">Home</a></li>
                    <li><a href="#" class="hover:text-blue-500">About</a></li>
                    <li><a href="#" class="hover:text-blue-500">Contact</a></li>
                </ul>
            </div>

            <!-- Right Side: Login Button (Hidden on Mobile) -->
            <div class="hidden md:block">
                <a href={{ route('login') }} class="bg-blue-500 text-white text-sm px-7 py-2 rounded hover:bg-blue-600 transition">Login</a>
            </div>

            <!-- Hamburger Button for Mobile -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg id="icon-hamburger" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <!-- X Icon -->
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-4 pb-0">
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Home</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">About</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Contact</a>
            <a href="#" class="mt-2 inline-block w-full text-center bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Login
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 mt-8">
        @yield('content')
    </main>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconHamburger = document.getElementById('icon-hamburger');
        const iconClose = document.getElementById('icon-close');

        menuToggle.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('max-h-0');

            // Toggle menu
            if (isHidden) {
                mobileMenu.classList.remove('max-h-0', 'pb-0');
                mobileMenu.classList.add('max-h-96', 'pb-4');
            } else {
                mobileMenu.classList.remove('max-h-96', 'pb-4');
                mobileMenu.classList.add('max-h-0', 'pb-0');
            }

            // Toggle icon
            iconHamburger.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
</body>

</html>