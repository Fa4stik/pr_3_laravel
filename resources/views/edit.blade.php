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
        <form method="POST" action="/edit/{{ $data['id'] }}}" enctype="multipart/form-data" class="flex flex-col py-4 items-start">
            @csrf
            @method('PUT')
            <div class="flex gap-x-2 mb-2">
                <img class="w-40 h-30" src="{{ asset('img/'.$data['Image']) }}" alt="Аватар">
                <input type="file" name="Image"
                       accept="image/*">
            </div>
            @error('Image')
            <p class="text-red-600 mb-1">*Фото имеет некорректный загружено</p>
            @enderror
            <div class="flex gap-x-2 mb-1">
                <p>ФИО</p>
                <input type="text"
                       name="FIO"
                       class="border-[2px] border-black border-solid"
                       value="{{ $data['FIO'] }}"
                >
            </div>
            @error('FIO')
            <p class="text-red-600 mb-1">*ФИО имеет некорректный формат</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Телефон</p>
                <input type="text"
                       name="Phone"
                       class="border-[2px] border-black border-solid"
                       value="{{ $data['Phone'] }}"
                >
            </div>
            @error('Phone')
            <p class="text-red-600 mb-1">*Телефон имеет некорректный формат</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Профессия</p>
                <select name="Staff" class="border-[2px] border-black border-solid">
                    @foreach ($staffs as $staff)
                        <option value="{{ $staff->id }}" {{ $staff->id == $data['Staff'] ? 'selected' : '' }}>{{ $staff->staff }}</option>
                    @endforeach
                </select>
            </div>
            @error('Staff')
            <p class="text-red-600 mb-1">*Выберите профессию</p>
            @enderror
            <div class="flex gap-x-2 mb-2">
                <p>Стаж</p>
                <input name="Stage"
                       type="number"
                       class="border-[2px] border-black border-solid"
                       value="{{ $data['Stage'] }}"
                >
            </div>
            @error('Stage')
            <p class="text-red-600 mb-1">*Стаж имеет некорректный формат</p>
            @enderror
            <button class="border-[2px] border-black border-solid p-2">Обновить резюме</button>
    </div>

</div>

<div class="text-center p-5 bg-green-500 text-white mt-auto">
    © Copyright 2017
</div>
</body>
</html>
