{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
<header class="w-screen bg-transparent my-6 absolute">
    <nav class="container mx-auto w-full flex justify-between items-center px-6 text-gray-600 z-40 py-3 relative">

        <a class="text-2xl flex items-center justify-between font-bold font-salsa text-white">
            <img src="{{ asset('Logo.png') }}" alt="Eventify Logo" class="w-40"> 
        </a>

        <div class="lg:hidden">
            <button class="navbar-burger flex items-center dark:text-gray-100 p-1" id="navbar_burger">
                <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Hamberger menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

                <button id="login-btn"
                    class=" py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block ">
                    Sign In
                </button>
    </nav>



    <!-- mobile navbar -->
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-50"></div>
        <nav
            class="fixed bg-white dark:bg-gray-600 top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 border-r overflow-y-auto">

            <div class="flex items-center mb-8">
                <a class="mr-auto text-2xl font-bold text-black dark:text-gray-100" href="/">
                    TailwindFlex
                </a>

                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <div class=" relative mx-auto text-gray-600">
                <input
                    class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none dark:placeholder-gray-200 dark:bg-gray-500 dark:border-gray-50"
                    type="search" name="search" placeholder="Search">

                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>

            </div>

            <div class="lg:flex">
                <div>
                    <span class="hidden" id="util_data"></span>
                    <a class=" py-1.5 px-3 m-1 text-center bg-gray-100  rounded-md text-black hover:bg-gray-100 lg:inline-block "
                        href="/">
                        Sign In
                    </a>
                </div>
            </div>
        </nav>
    </div>

</header>
