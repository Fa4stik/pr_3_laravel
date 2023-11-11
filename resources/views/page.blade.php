<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $header }}</title>
    <!-- Include Tailwind CSS from CDN for simplicity -->
    @vite('resources/css/app.css')
</head>
<body class="w-screen h-screen flex flex-col justify-between">

<div class="text-center text-2xl font-semibold p-5 bg-green-500">
    <h1>{{ $header }}</h1>
    {{--    <div class="inline-block bg-[url('Images/sprite.png')] bg-no-repeat h-8 w-36 ml-5 mb-0 align-middle"></div> <!-- Logo -->--}}
</div>

<div class="flex flex-wrap justify-between md:justify-start mb-10">

    <div class="w-full md:w-1/4 p-5 bg-white text-right">
        <ul class="space-y-3">
            <li class="bg-green-500 p-5 text-white cursor-pointer">Вакансии</li>
            <li class="bg-green-500 p-5 text-white cursor-pointer">Резюме по профессиям</li>
            <li class="bg-green-500 p-5 text-white cursor-pointer">Резюме по возрасту</li>
            <li class="bg-green-500 p-5 text-white cursor-pointer">Избранное резюме</li>
        </ul>
    </div>

    <div class="flex-1 flex flex-col">
        <h1 class="text-3xl font-bold">Программист</h1>
        <div class="flex flex-wrap gap-5">
            <div class="flex flex-col cursor-pointer">
                <img src="{{ asset('img/ava1.jpg') }}"
                     alt="Аватар"
                     class="w-40 h-30"
                >
                <div class="flex flex-col">
                    <p>Иванов Иван</p>
                    <p class="mb-3">Телефон: 111111</p>
                    <p class="text-green-600 font-bold">Стаж: 7 лет</p>
                </div>
            </div>
            <div class="flex flex-col cursor-pointer">
                <img src="{{ asset('img/ava1.jpg') }}"
                     alt="Аватар"
                     class="w-40 h-30"
                >
                <div class="flex flex-col">
                    <p>Иванов Иван</p>
                    <p class="mb-3">Телефон: 111111</p>
                    <p class="text-green-600 font-bold">Стаж: 7 лет</p>
                </div>
            </div>
            <div class="flex flex-col cursor-pointer">
                <img src="{{ asset('img/ava1.jpg') }}"
                     alt="Аватар"
                     class="w-40 h-30"
                >
                <div class="flex flex-col">
                    <p>Иванов Иван</p>
                    <p class="mb-3">Телефон: 111111</p>
                    <p class="text-green-600 font-bold">Стаж: 7 лет</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="w-full text-center p-5 bg-green-500 text-white mt-auto">
    © Copyright 2017
</div>

</body>
</html>
