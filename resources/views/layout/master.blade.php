@extends('layout.layout')

<body class="antialiased">
    <!-- navbar -->

    <div x-data="{ open: false }" class="w-full text-gray-700 bg-cream">
        <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
            <div class="flex flex-row items-center justify-between py-6">
                <div class="relative md:mt-8">
                    <a href="#"
                        class="text-3xl relative z-50 font-bold tracking-widest text-green-700 rounded-lg focus:outline-none focus:shadow-outline">Agrolink</a>
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }"
                class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#home">Home</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#feature">Features</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#co">Co's</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#about">About Us</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#contact">Contact Us</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-white text-gray-800 rounded-full md:mt-8 md:ml-4"
                    href="{{ route('login') }}">Login</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-yellow-500 text-white rounded-full md:mt-8 md:ml-4"
                    href="{{ route('register') }}">Sign Up</a>
            </nav>
        </div>
    </div>
    @yield('middle_content')






    <footer class="mt-32" style="background-color: rgba(37, 38, 65, 1);">
        <div class="max-w-lg mx-auto">
            <div class="flex py-12 justify-center text-white items-center px-20 sm:px-36">
                <div class="relative">
                    <h1 class="font-bold text-xl text-green-700 pr-5 relative z-50">Agrolink</h1>
                    <svg class="w-11 h-11 absolute -top-2 -left-3 z-40" viewBox="0 0 79 79" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z"
                            stroke="#26C1F2" stroke-width="2" />
                    </svg>
                </div>
                <span class="border-l border-gray-500 text-sm pl-5 py-2 font-semibold">Agricultural productivity</span>
            </div>
            <div class="text-center pb-16 pt-5">
                <label class="text-gray-300 font-semibold">Subscribe to get our Newsletter</label>
                <div
                    class="px-5 sm:px-0 flex flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0 justify-center mt-3">
                    <input type="email" placeholder="Your Email"
                        class="rounded-full py-2 pl-5 bg-transparent border border-gray-400">
                    <button type="submit"
                        class="text-white w-40 sm:w-auto mx-auto sm:mx-0 font-semibold px-5 py-2 rounded-full"
                        style="background: linear-gradient(105.5deg, #545AE7 19.57%, #393FCF 78.85%);">Subscribe</button>
                </div>
            </div>
            <div class="flex items-center text-gray-400 text-sm justify-center">
                <a href="" class="pr-3">Careers</a>
                <a href="" class="border-l border-gray-400 px-3">Privacy</a>
                <a href="" class="border-l border-gray-400 pl-3">Terms & Conditions</a>
            </div>
            <div class="text-center text-white">
                <p class="my-3 text-gray-400 text-sm">&copy; 2021 KMN web dev't. </p>
                <div class="py-3 tracking-wide">
                    <p>Code By <span class="font-semibold">Mikael Endale</span></p>
                    <p>UI/UX By <span class="font-semibold">Abel & Yodahe</span></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
