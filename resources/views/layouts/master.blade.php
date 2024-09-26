<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyaan Jyoti English Boarding School, Bharatpur-14, Shivanagar, Chitwan</title>
    <!-- favicon link -->
    <link rel="shortcut icon" href="{{ asset('images/gjeslogo.png') }}" type="image/x-icon">
    <!-- tailwind css cdn link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- animation cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- boxicon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <!-- navbar  -->
    <nav class="bg-blue-900 sticky   top-0">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img class="h-16 w-auto" src="{{ asset('images/gjeslogo.png') }}" alt="Gyaan Jyoti English School logo">
                </div>

                <!-- Desktop menu (visible on lg screens and up) -->
                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-center space-x-4">
                    <a href="/" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">Home</a>
                    <a href="{{route('about')}}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">About</a>

                    <!-- Academic Dropdown -->
                    <div class="relative group">

                        <button id="academic-menu-button"
                            class="px-3 py-2 text-xs  text-white rounded-md hover:text-gray-300text-sm lg:text-base font-medium">
                            Academics <i class='bx bxs-chevron-down'></i>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 hidden w-48 p-2 text-base transition-all duration-300 ease-in-out transform bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 top-8 left-3 group-hover:block group-hover:opacity-100 group-hover:translate-y-2 animate__animated animate__zoomIn">


                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Pre-primary School</span>
                                </a>

                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Primary School</span>
                                </a>

                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Secondary School</span>

                                </a>







                            </div>
                    </div>


                    <a href="/admission" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">Admission</a>

                    <a href="/facility" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">Facility</a>
                    <a href="/notice" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">Notice</a>
                    <a href="/gallery" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">Gallery</a>
                    <a href="/contact" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm lg:text-base font-medium">Contact</a>
                </div>

                <!-- Login for large devices -->
                <!-- Book Now and User Profile (Desktop) -->
                <div class="hidden lg:flex lg:items-center lg:space-x-4">

                    @auth

                        <div class="relative group">
                            <!-- Profile Picture -->
                            <img class="w-8 h-8 rounded-full cursor-pointer" src="{{asset('images/student/1726507728.jpg')}}"
                                alt="User Profile">

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 hidden w-48 p-2 transition-all duration-300 ease-in-out transform bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 top-6 group-hover:block group-hover:opacity-100 group-hover:translate-y-2 animate__animated animate__bounceIn">

                                {{-- my booking --}}
                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">
                                    <i class='text-xl bx bx-calendar-event'></i>
                                    <span>My Appointment</span>
                                </a>

                                <!-- My Chart -->
                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">
                                    <i class='text-xl bx bx-cart-add'></i>
                                    <span>My Cart</span>
                                </a>

                                <!-- My Order -->
                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">
                                    <i class='text-xl bx bx-shopping-bag'></i>
                                    <span>My Order</span>
                                </a>

                                <!-- My Profile -->
                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">
                                    <i class='text-xl bx bx-user'></i>
                                    <span>My Profile</span>
                                </a>

                                <!-- Logout -->
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button
                                        class="flex items-center w-full gap-2 p-2 text-left text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-red-50 hover:text-red-600">
                                        <i class='text-xl bx bx-log-out'></i>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Login Button for Guests -->
                    @else
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 ml-2 text-lg font-medium text-[#051923] transition-all duration-300 bg-white rounded-md hover:bg-[#0f232d] hover:text-white">
                            Login
                        </a>
                    @endauth

                </div>


                <!-- Mobile and Tablet Menu button (visible on sm and md screens) -->
                <div class="flex lg:hidden items-center">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:bg-blue-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" id="menu-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg class="hidden h-6 w-6" id="close-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (visible on sm and md screens) -->
        <div class="hidden lg:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="/" class="text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="/about" class="text-white block px-3 py-2 rounded-md text-base font-medium">About</a>

                {{-- Academic --}}
                    <div class="relative group">

                        <button id="academic-menu-button"
                            class="px-3 py-2  text-white rounded-md hover:text-gray-300 text-base font-medium">
                            Academics <i class='bx bxs-chevron-down'></i>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute z-20 right-0 hidden w-48 p-2 text-base transition-all duration-300 ease-in-out transform bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 top-8 left-3 group-hover:block group-hover:opacity-100 group-hover:translate-y-2 animate__animated animate__zoomIn">


                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Pre-primary School</span>
                                </a>

                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Primary School</span>
                                </a>

                                <a href=""
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Secondary School</span>

                                </a>

                            </div>
                    </div>


                <a href="/admission" class="text-white block px-3 py-2 rounded-md text-base font-medium">Admission</a>
                <a href="/facility" class="text-white block px-3 py-2 rounded-md text-base font-medium">Facilities</a>


                <a href="/notice" class="text-white block px-3 py-2 rounded-md text-base font-medium">Notice</a>
                <a href="/gallery" class="text-white block px-3 py-2 rounded-md text-base font-medium">Gallery</a>
                <a href="/contact" class="text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>

            <!-- Mobile Login Dropdown -->
            <div class="flex items-center justify-between w-full px-5 py-2 ">

                @auth

                    <div class="relative group">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('images/student/1726507824.jpg') }}"
                            alt="User Profile">
                        <div
                            class="absolute hidden w-48 p-2 bg-gray-100 border rounded shadow left-10 -top-12 group-hover:block">
                            <a href="" class="block p-4 py-2 hover:bg-gray-200">
                                <i class='bx bx-bar-chart-alt'></i> My Chart
                            </a>
                            <a href="" class="block p-4 py-2 hover:bg-gray-200">
                                <i class='bx bx-shopping-bag'></i> My Order
                            </a>
                            <a href="" class="block p-4 py-2 hover:bg-gray-200">
                                <i class='bx bx-user'></i> My Profile
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="block w-full p-4 py-2 text-left rounded-md hover:bg-gray-200">
                                    <i class='bx bx-log-out'></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="block p-3 py-2 -ml-1 text-base font-medium text-[#0f232d] bg-white rounded-md">Login</a>
                @endauth
            </div>

        </div>
    </nav>

    <!-- content -->
    @yield('content')
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- School Logo and Description -->
            <div class="flex flex-col items-center sm:items-start">
                <img src="{{asset('images/gjeslogo.png')}}" alt="School Logo" class="mb-4 w-32 sm:w-40">
                <p class="text-center sm:text-left">
                    Welcome to our school. We are dedicated to providing quality education and fostering growth in every student. Join us in our journey to excellence.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline hover:text-gray-300 transition duration-300">Home</a></li>
                    <li><a href="#" class="hover:underline hover:text-gray-300 transition duration-300">About</a></li>
                    <li><a href="#" class="hover:underline hover:text-gray-300 transition duration-300">Academics</a></li>
                    <li><a href="#" class="hover:underline hover:text-gray-300 transition duration-300">Gallery</a></li>
                    <li><a href="#" class="hover:underline hover:text-gray-300 transition duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                <p>School Name</p>
                <p>Address: 123 Main St, City, Country</p>
                <p>Phone: <a href="tel:+1234567890" class="hover:underline hover:text-gray-300">+123 456 7890</a></p>
                <p>Email: <a href="mailto:info@school.com" class="hover:underline hover:text-gray-300">info@school.com</a></p>
            </div>

            <!-- Location Map -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-lg font-semibold mb-4">Location</h3>
                <div class="w-full rounded-lg overflow-hidden shadow-md">
                    <iframe class="w-full h-48" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28494.01940446019!2d84.33903287294483!3d27.666308087630904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994f720e313601f%3A0x930ad91c3e6de45a!2sGentlemen%20Barbershop%20%26%20Academy!5e0!3m2!1sen!2snp!4v1693668794328!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center text-sm text-gray-400">
            <p>&copy; 2024 School Name. All Rights Reserved. Design by <a href="#" class="text-white hover:underline hover:text-gray-300 transition duration-300">Your Company</a></p>
        </div>
    </footer>




    <!-- Scripts -->
    <script>

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>

</body>

</html>
