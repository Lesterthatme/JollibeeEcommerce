<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Jollibee Carbon Copy Website' }}</title>

    @vite(['resources/css/app.css', 'resources/js/jolli.js'])
</head>

<body class="font-[MySpecialFont]">

    <x-navbar />

    {{ $slot }}

    <x-footer />
</body>

</html>
