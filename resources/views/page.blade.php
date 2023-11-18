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

    @include('sidebar')

    <div class="flex-1 flex flex-col">
        <h1 class="text-3xl font-bold">Программист</h1>
        <div class="flex flex-wrap gap-5">
            @foreach ($persons as $person)
                <div class="flex flex-col cursor-pointer" onclick="window.location.href='show/{{ $person['id'] }}'">
                    <img src="{{ asset('img/'.$person['Image']) }}"
                         alt="Аватар"
                         class="w-40 h-30"
                    >
                    <div class="flex flex-col">
                        <p>ФИО: {{ $person['FIO'] }}</p>
                        <p class="mb-3">Телефон: {{ $person['Phone'] }}</p>
                        <p class="text-green-600 font-bold">Стаж: {{ $person['Stage'] }}</p>
                    </div>
                    <form action="/delete/{{ $person['id'] }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-[1px] border-solid border-black p-1">Удалить</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

</div>

<div class="w-full text-center p-5 bg-green-500 text-white mt-auto">
    © Copyright 2017
</div>

</body>
</html>
