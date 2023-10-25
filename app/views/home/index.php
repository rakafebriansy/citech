<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ../login/index.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProKidz</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#hero" class="font-bold text-lg text-primary block py-6">
                        <img src="../../../public/img/logo.png" width="50" alt="">
                    </a>
                </div>
                <div class="items-center p-4 hidden lg:flex">
                    <nav id="nav-menu"
                        class="hidden absolute bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-secondary lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#hero"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">About
                                    us</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Our
                                    Program</a>
                            </li>
                            <li class="group">
                                <a href="#technologies"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Contact
                                    us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="profile">
                    <img class="inline-block" src="../../../public/img/user.png" width="36" alt="">
                    <p class="inline-block ms-2">
                        <?=
                         $_SESSION["user"]["username"]
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION START -->
    <section id="hero" class="pt-40 bg-secondary pb-20">
        <div class="container flex flex-wrap justify-center">
            <div class="self-center px-4 w-9/12 lg:w-1/2">
                <div class="font-bold text-4xl md:text-6xl">
                    <h1>Programming</h1>
                </div>
                <div class="font-bold text-4xl md:text-6xl">
                    <h1 class="text-red-500">Languages</h1>
                </div>
                <div class="md:text-base sm:text-sm mt-5 md:mt-5 mb-3 md:mb-5">
                    <p>A programming language is a set of rules and symbols used to write computer programs. Programming languages ​​allow developers to create applications, software, and websites by organizing logic, workflows, and different functions. Programming languages can be classified as low-level languages (e.g. assembly language), mid-level languages (such as C, C++), and high-level languages (such as Python, Java) depending on the complexity.</p>
                </div>
            </div>
            <div class="bg-blue-500 w-2/12 h-[40%] hidden xl:h-[60%] lg:block absolute top-28 right-60"></div>
            <img src="../../../public/img/hero-dashboard.jpg" alt="" class="hidden lg:block w-5/12 z-10">
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- OUR COURSES START -->
    <section id="ourprogram" class="pt-12 pb-12 bg-white">
        <h1 class="text-center text-3xl md:text-6xl font-bold mb-6">Our Courses</h1>
        <div class="w-full flex justify-center">
            <input type="text" name="search-program" id="search-program" placeholder="Enter Keyword" class="text-xl px-2 py-2 w-10/12" style="border: 1px solid black">
        </div>
        <div class="flex flex-wrap justify-evenly">
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg my-6 dark:bg-emerald-700">
                    <img src="../../../public/img/Python.jpeg" class="p-5" alt="">
                    <div class="px-6">
                        <h3 class="font-semibold text-lg">Python
                        </h3>
                        <p class="pt-2">A versatile programming language with clear and easy-to-learn syntax, used for web development, data science, and artificial intelligence.</p>
                        <div class="w-full bg-gray-200 rounded-full overflow-hidden mt-4">
                            <div id="progress-bar" class="w-[10%] bg-red-500 h-4 text-center"></div>
                        </div>
                        <p class="mb-4">0% complete</p>
                    </div>
                    <div class="flex flex-wrap justify-end px-6">
                        <a href=""
                        class="inline-block md:text-base sm:text-sm mb-5 font-semibold text-white bg-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                        target="_blank">Start</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg my-6 dark:bg-emerald-700">
                    <img src="../../../public/img/Java.jpeg" class="p-5" alt="">
                    <div class="px-6">
                        <h3 class="font-semibold text-lg">Java
                        </h3>
                        <p class="pt-2">A platform-agnostic programming language often used for application and mobile device-based software development.</p>
                        <div class="w-full bg-gray-200 rounded-full overflow-hidden mt-4">
                            <div id="progress-bar" class="w-[10%] bg-red-500 h-4 text-center"></div>
                        </div>
                        <p class="mb-4">0% complete</p>
                    </div>
                    <div class="flex flex-wrap justify-end px-6">
                        <a href=""
                        class="inline-block md:text-base sm:text-sm mb-5 font-semibold text-white bg-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                        target="_blank">Start</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg my-6 dark:bg-emerald-700">
                    <img src="../../../public/img/CPP.jpeg" class="p-5" alt="">
                    <div class="px-6">
                        <h3 class="font-semibold text-lg">C++
                        </h3>
                        <p class="pt-2">An efficient and powerful programming language, often used in the development of system software, games and high-performance applications.</p>
                        <div class="w-full bg-gray-200 rounded-full overflow-hidden mt-4">
                            <div id="progress-bar" class="w-[10%] bg-red-500 h-4 text-center"></div>
                        </div>
                        <p class="mb-4">0% complete</p>
                    </div>
                    <div class="flex flex-wrap justify-end px-6">
                        <a href=""
                        class="inline-block md:text-base sm:text-sm mb-5 font-semibold text-white bg-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                        target="_blank">Start</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg my-6 dark:bg-emerald-700">
                    <img src="../../../public/img/PHP.jpeg" class="p-5" alt="">
                    <div class="px-6">
                        <h3 class="font-semibold text-lg">PHP
                        </h3>
                        <p class="pt-2">A server-side programming language commonly used for dynamic web development and creating complex web applications.</p>
                        <div class="w-full bg-gray-200 rounded-full overflow-hidden mt-4">
                            <div id="progress-bar" class="w-[10%] bg-red-500 h-4 text-center"></div>
                        </div>
                        <p class="mb-4">0% complete</p>
                    </div>
                    <div class="flex flex-wrap justify-end px-6">
                        <a href=""
                        class="inline-block md:text-base sm:text-sm mb-5 font-semibold text-white bg-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                        target="_blank">Start</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg my-6 dark:bg-emerald-700">
                    <img src="../../../public/img/CS.jpeg" class="p-5" alt="">
                    <div class="px-6">
                        <h3 class="font-semibold text-lg">C#
                        </h3>
                        <p class="pt-2">a powerful and versatile programming language designed for the development of various applications based on Windows and the .NET Framework.</p>
                        <div class="w-full bg-gray-200 rounded-full overflow-hidden mt-4">
                            <div id="progress-bar" class="w-[10%] bg-red-500 h-4 text-center"></div>
                        </div>
                        <p class="mb-4">0% complete</p>
                    </div>
                    <div class="flex flex-wrap justify-end px-6">
                        <a href=""
                        class="inline-block md:text-base sm:text-sm mb-5 font-semibold text-white bg-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                        target="_blank">Start</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- OUR COURSES END -->

    <!-- FOOTER START -->
    <footer class="bg-lime-100">
        <div class="container">
            <div class="flex flex-wrap justify-between pt-8">
                <div class="w-full px-4 mb-8 md:w-2/6">
                    <span class="block font-bold mb-2"><img class="inline-block me-5" src="./dist/logo hitam.png"
                            alt="" width="50">ProKidz</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, recusandae.</p>
                </div>
                <div class="w-full mb-12 px-4 md:w-1/6">
                    <ul>
                        <li>FAQ</li>
                        <li>Panduan</li>
                        <li>+0913-705-3875</li>
                        <li>Email.com</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="./script.js"></script>
    <!-- FOOTER END -->
</body>
</html>