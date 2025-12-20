<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="select-none">
    <x-navigation />

    {{ $slot }}

    <script>
        const openNav = document.getElementById('openNav');
        const navDevice = document.getElementById('navDevice');

        openNav.addEventListener('click', () => {
            alert('pumasok');
        });
    </script>
</body>

</html>
