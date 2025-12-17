<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jollibee Carbon Copy Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/jolli.js')


</head>

<body>
    <header class="bg-red-600">
        <nav class="flex justify-between items-center 
        mx-3
        sm:mx-5
        lg:mx-29.5 
        h-20">
            <div class="cursor-pointer block sm:hidden text-white open-modal-device">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-9">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div class="flex items-center justify-center">
                <img src="https://www.jollibee.com.ph/themes/custom/jollibee_theme/logo.svg" alt="jollisog"
                    class="">
            </div>
            <ul class="hidden sm:inline-flex items-center justify-center gap-5 text-white text-lg font-bold">
                <li class="text-nowrap"><a href="#">Locations</a></li>
                <li class="text-nowrap"><a href="#">Menu</a></li>
                <li class="text-nowrap"><a href="#">Offers</a></li>
                <li class="text-nowrap"><a href="#">Gift Cards</a></li>
                <li class="text-nowrap">
                    <a href="#"
                        class="bg-white text-red-600 rounded-full p-3 hover:text-red-500 transition-colors duration-400">Order
                        Now</a>
                </li>
            </ul>
            {{-- pag naka device --}}
            <div class="nav-device-body fixed inset-0 bg-black/50 opacity-0 transition-opacity duration-300 hidden"
                onclick="outside()">
                <div class="bg-white w-[65%] h-full px-4 flex flex-col -translate-x-full transition-transform duration-300"
                    onclick="event.stopImmediatePropagation()">
                    <div class="flex justify-between py-4">
                        <img src="https://www.jollibee.com.ph/themes/custom/jfc_global_theme/images/mobile-offcanvas-logo.png"
                            alt="jollisog" class="">
                        <button class="close-modal-device text-gray-600 cursor-pointer ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <h2 class="text-gray-500 font-bold text-sm mb-2">Navigation</h2>
                    <ul class="font-bold flex-1 flex flex-col">
                        <li class="py-2.5"><a href="#">Locations</a></li>
                        <li class="py-2.5"><a href="#">Menu</a></li>
                        <li class="py-2.5"><a href="#">Offers</a></li>
                        <li class="py-2.5"><a href="#">Gift Cards</a></li>
                        <li class="py-2.5 w-full mt-auto">
                            <a href="#" class="block bg-red-600 text-white py-4 rounded-4xl w-full text-center">
                                Order Now
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        const openModalDevice = document.querySelector('.open-modal-device');
        const closeModalDevice = document.querySelector('.close-modal-device');
        const navDeviceBody = document.querySelector('.nav-device-body');
        const sidePanel = navDeviceBody.querySelector('.bg-white');

        openModalDevice.addEventListener('click', (e) => {
            navDeviceBody.classList.remove('hidden');
            navDeviceBody.classList.add('flex');
            setTimeout(() => {
                navDeviceBody.classList.add("opacity-100");
                sidePanel.classList.remove('-translate-x-full');
                sidePanel.classList.add('translate-x-0');
            }, 50);


        });

        closeModalDevice.addEventListener('click', () => {
            outside();
        });

        function outside() {
            // fade out overlay
            navDeviceBody.classList.remove('opacity-100');
            navDeviceBody.classList.add('opacity-0');

            //  -translate-x-full
            // slide menu out
            sidePanel.classList.remove('translate-x-0');
            sidePanel.classList.add('-translate-x-full');


            // after animation, hide overlay
            setTimeout(() => {
                navDeviceBody.classList.add('hidden');
                navDeviceBody.classList.remove('flex');
            }, 300); // match duration-300
        }
    </script>
</body>

</html>
