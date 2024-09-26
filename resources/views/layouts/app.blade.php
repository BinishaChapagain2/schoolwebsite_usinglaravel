<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Dashboard</title>

    {{-- tailwind cdn --}}

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <style>
        /* Google Fonts - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }



        nav {
            position: fixed;
            top: 0;
            left: 0;
            height: 70px;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
        }



        .logo .menu-icon {

            font-size: 24px;
            margin-right: 14px;
            cursor: pointer;
        }



        nav .sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            height: 100%;
            width: 200px;
            padding: 20px 0;
            box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        nav.open .sidebar {
            left: 0;
        }

        .sidebar .sidebar-content {
            display: flex;
            height: 100%;
            flex-direction: column;
            justify-content: space-between;
            padding: 5px 16px;
        }

        .sidebar-content .list {
            list-style: none;
        }

        .lists .nav-link:hover {
            background-color: #4070f4;
        }

        .list .nav-link {
            display: flex;
            align-items: center;
            margin: 2px 0;
            padding: 10px 12px;
            border-radius: 5px;
            text-decoration: none;
        }

        .nav-link .link {
            font-size: 16px;
            font-weight: 400;
        }



        .nav-link .icon {
            margin-right: 14px;
            font-size: 20px;

        }


        .overlay {
            position: fixed;
            top: 0;
            left: -100%;
            height: 1000vh;
            width: 200%;
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s ease;
            background: rgba(0, 0, 0, 0.3);
        }

        nav.open~.overlay {
            opacity: 1;
            left: 200px;
            pointer-events: auto;
        }
    </style>
</head>

<body>
    <div class="flex h-auto mx-1 my-16 bg-white ">
        <nav class="z-10 w-full ">
            @yield('headerofadmin')
            <div class="sidebar bg-blue-900 ">
                <div class="mx-auto text-white logo flex items-center h-20 p-5  justify-center w-full">
                    <img src="{{asset('images/gjeslogo.png')}}" alt="school logo" class="h-20 ">
                </div>

                <div class="text-white sidebar-content ">
                    <ul class="lists">
                        <li class="list ">
                            <a href="/dashboard" class="nav-link">
                                <i class="bx bx-home-alt icon"></i>
                                <span class="link">Dashboard</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="{{ route('teacher.index') }}" class="nav-link">
                                <i class=" bx bxs-graduation icon"></i>
                                <span class="link">Teacher</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="{{ route('student.index') }}" class="nav-link">
                                <i class="bx bxs-user icon"></i>
                                <span class="link">Student</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="{{ route('schoolclass.index') }}" class="nav-link">
                                <i class='bx bx-building icon'></i>
                                <span class="link">Class</span>
                            </a>
                        </li>



                        <li class="list">
                            <!-- Services Dropdown -->
                    <div class="relative group list">
                        <a href="{{ route('schoolclass.index') }}" class="nav-link ">

                            <i class='bx bx-spreadsheet'></i> &nbsp; &nbsp; Examination
                        </a>

                            <!-- Dropdown Menu -->
                            <div class="absolute right-0 hidden w-48  left-32 p-2 text-base transition-all duration-300 ease-in-out transform bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 top-9 group-hover:block group-hover:opacity-100 group-hover:translate-y-2 animate__animated animate__bounceIn">
                                <a href="{{route('exam.index')}}"
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Exam</span>
                                </a>

                                <a href="{{route('subject.index')}}"
                                    class="flex items-center gap-2 p-2 text-gray-700 transition-colors duration-300 ease-in-out rounded-lg hover:bg-blue-50 hover:text-blue-600">

                                    <span>Subject</span>
                                </a>



                            </div>

                    </div>

                        </li>













                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bxl-gmail icon'></i>
                                <span class="link">Mail</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="{{route('schoolnotice.index')}}" class="nav-link">
                                <i class="bx bx-group icon"></i>
                                <span class="link">Notice</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class=" bx bx-envelope icon"></i>
                                <span class="link">Enquiry</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="bx bx-image icon"></i>
                                <span class="link">Gallery</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="bx bx-cog icon"></i>
                                <span class="link">Settings</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="bx bx-log-out icon"></i>
                                <span class="link">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
         @include('layouts.alert')
        <section class="overlay"></section>

        @yield('content')
    </div>
    <script>
        const navBar = document.querySelector("nav"),
            menuBtns = document.querySelectorAll(".menu-icon"),
            overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });
        });

        overlay.addEventListener("click", () => {
            navBar.classList.remove("open");
        });
    </script>
</body>

</html>
