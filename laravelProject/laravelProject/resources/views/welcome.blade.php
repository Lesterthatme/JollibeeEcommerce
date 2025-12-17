<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gradient-to-t from-[#fb2eb] to-[#a6c1ee] h-screen">
    <header class="bg-white ">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <img class="w-16" src="https://rmtanimalbitecenter.com/assets/images/logo.jpg" alt="img">
            </div>
            <div class="">
                <ul class="flex items-center gap-[4vw]">
                    <li>
                        <a href="#" class="hover:text-gray-500 ">Products

                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-500">Solution</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-500">Resource</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-500">Developers</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-500">Pricing</a>
                    </li>
                </ul>
            </div>
            <div>
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] cursor-pointer">Sign
                    in</button>
            </div>
        </nav>
    </header>
    <main>
        <div class="[&>[data-active]+span]:text-blue-600 ...">
            <span data-active><!-- ... --></span>
            <span>This text will be blue</span>
        </div>
        <div>
            <button class="btn-secondary">
                sign up button
            </button>
        </div>
    </main>
</body>

</html>
