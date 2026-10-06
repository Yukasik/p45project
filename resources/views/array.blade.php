<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Масссив</title>
</head>

<body>
    <header>
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo" class="header-img">
        <div class="header-navigation">
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </div>
    </header>
    <main class="array-main">
        <div class="array-links">
            <a href="{{ route('array.shuffle') }}">Перемешать массив</a>
            <a href="{{ route('array.sort') }}">Сортировать массив</a>
            <a href="{{ route('array.filter') }}">Отфильтровать массив</a>
        </div>
        <div class="main-cards">
            @foreach ($array as $item)
            <div class="main-card">
                <img src="{{ Vite::asset('resources/images/'.$item['path']) }}" alt="{{ $item['title']}}" class="main-card-img">
                <h3>Название: {{ $item['title'] }}</h3>
                <h3>Цена: {{ $item['price'] }}</h3>
            </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>© Усольцева Ксения Михайловна 2026</p>
    </footer>
</body>

</html>