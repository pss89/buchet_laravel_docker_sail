<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Post Layout</title>
</head>
<body>
    {{-- <x-navbar></x-navbar> --}}
    <x-navbar /> <!-- 단축해서 사용 -->
    <div class="max-w-6xl mx-auto">
        {{ $slot }}
    </div>
</body>
</html>