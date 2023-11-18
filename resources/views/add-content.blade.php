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
    <h1>{{ $header }}</h1>
</div>

<div class="flex flex-wrap justify-between md:justify-start mb-10">

    @include('sidebar')

    <div class="flex-1 flex flex-col">
        <form method="POST" action="/add" enctype="multipart/form-data" class="flex flex-col py-4 items-start">
            @csrf
            <div class="flex gap-x-2 mb-1">
                <p>ФИО</p>
                <input type="text" name="FIO" class="border-[2px] border-black border-solid">
            </div>
            @error('FIO')
                <p class="text-red-600 mb-1">*ФИО имеет некорректный формат</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Телефон</p>
                <input type="text" name="Phone" class="border-[2px] border-black border-solid">
            </div>
            @error('Phone')
                <p class="text-red-600 mb-1">*Телефон имеет некорректный формат</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Фото</p>
                <input type="file" name="Image" accept="image/*" class="border-[2px] border-black border-solid">
            </div>
            @error('Image')
                <p class="text-red-600 mb-1">*Фото имеет некорректный загружено</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Профессия</p>
                <select name="Staff" class="border-[2px] border-black border-solid">
                    @foreach ($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->staff }}</option>
                    @endforeach
                </select>
            </div>
            @error('Staff')
                <p class="text-red-600 mb-1">*Выберите профессию</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Стаж</p>
                <input name="Stage" type="number" class="border-[2px] border-black border-solid">
            </div>
            @error('Stage')
                <p class="text-red-600 mb-1">*Стаж имеет некорректный формат</p>
            @enderror
            <button class="border-[2px] border-black border-solid p-2">Добавить резюме</button>
        </form>
    </div>

</div>

<div class="w-full text-center p-5 bg-green-500 text-white mt-auto">
    © Copyright 2017
</div>

</body>
</html>
