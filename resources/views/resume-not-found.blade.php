<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резюме и вакансии</title>
    <!-- Include Tailwind CSS from CDN for simplicity -->
    @vite('resources/css/app.css')
</head>
<body class="w-screen h-screen flex flex-col justify-between">

<div class="text-center text-2xl font-semibold p-5 bg-green-500">
    <h1>Резюме и вакансии</h1>
    {{--    <div class="inline-block bg-[url('Images/sprite.png')] bg-no-repeat h-8 w-36 ml-5 mb-0 align-middle"></div> <!-- Logo -->--}}
</div>

<div class="flex flex-wrap justify-between md:justify-start">

    @include('sidebar')

    <div class="w-full md:w-2/3 p-5 bg-white">
        <h1 class="text-3xl">Резюме с id {{ $id }} не найдено</h1>
    </div>

</div>

<div class="text-center p-5 bg-green-500 text-white mt-auto">
    © Copyright 2017
</div>
</body>
</html>
