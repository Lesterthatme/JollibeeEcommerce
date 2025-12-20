<nav class="bg-gradient-to-r from-slate-900 to-gray-50 h-15 px-5 sm:px-10 shadow-md flex justify-between">

    <div class="text-3xl sm:text-4xl font-bold flex items-center">
        <p class="bg-gradient-to-br from-amber-500 to-rose-700 bg-clip-text text-transparent text-nowrap">House of
            Desire</p>
    </div>
    <div class="items-center hidden sm:flex">
        <ul class="flex gap-4 text-2xl font-semibold">
            <li class="text-black hover:text-orange-600 transition-colors duration-300"><a href="{{route('landing.home') }}">Home</a>
            </li>
            <li class="text-black hover:text-orange-600 transition-colors duration-300"><a href="{{route('landing.registration') }}">Registration</a>
            </li>
        </ul>
    </div>
    <div class="flex items-center cursor-pointer sm:hidden" id="openNav">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
        </svg>
    </div>

    <div class="hidden fixed inset-0 bg-black/50" id="navDevice">
        <div class="bg-slate-900 min-h-[20%] pb-4">
            <div class="flex justify-between p-3">
                <div class="text-3xl font-semibold">
                    <p class="bg-gradient-to-br from-amber-500 to-rose-700 bg-clip-text text-transparent text-nowrap">
                        House of
                        Desire</p>
                </div>
                <div class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <ul class="text-white text-center text-xl">
                <li class="hover:text-orange-600"><a href="{{route('landing.home') }}">Home</a></li>
                <li class="hover:text-orange-600"><a href="{{route('landing.registration') }}">Registration</a></li>
            </ul>
        </div>
    </div>


</nav>
