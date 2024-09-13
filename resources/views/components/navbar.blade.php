<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .navbar-scrolled {
            opacity: 80%;
            transition: background-color 0.3s;
        }

        .button{
            background-color:#7A1CAC;
        }
    </style>
</head>
<body>
    <nav id="navbar" class="flex items-center justify-between p-6 lg:px-8 shadow-lg fixed top-0 left-0 w-full bg-white z-50" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <p class="font-bold">GASPOOL</p>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-600">Home</a>
            <a href="#hero-section" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-600">About</a>
            <a href="#view" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-600">View</a>
            <a href="#testimonial" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-600">Testimonial</a>
            <a href="#contact" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-600">Contact</a>
            <a href="{{ route('chart') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-600">Chart</a>
        </div>
        <ul class="flex justify-end space-x-4 pl-8">
            <li class="relative">
                <button class="flex items-center text-gray-800 hover:text-gray-600 focus:outline-none" id="userMenuButton" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    {{-- ditambah tanda tanya --}}
                    <span class="ml-2">{{ Auth::user()?->name }}</span>
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden" id="userMenu">
                    <ul class="py-1 text-sm text-gray-700">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Level: {{ Auth::user()?->role }}</a>
                        </li>
                        <li><hr class="my-1 border-gray-200" /></li>
                        <li>
                            <a href="{{ route('actionlogout') }}" id="logoutButton" class="block px-4 py-2 text-red-600 hover:bg-gray-100"><i class="fa fa-power-off"></i> Log Out</a>
                            <x-validasilog/>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>

    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) { // Change 50 to whatever scroll amount you prefer
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
</body>
</html>
