<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Начальная</title>
</head>

<body>
    <header>
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo" class="header-img">
        <div class="header-navigation">
            <a href="/home">Главная</a>
            <a href="/array">Массивы</a>
        </div>
    </header>
    <main class="home-main">
        <img src="{{ Vite::asset('resources/images/dog.jpg') }}" alt="logo" class="main-img">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae hendrerit mauris. Fusce sit amet mi congue, iaculis erat non, bibendum nisl. Vega donec pretium feugiat ligula, id convallis lacus accumsan non. Duis interdum tristique eleifend.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae hendrerit mauris. Fusce sit amet mi congue, iaculis erat non, bibendum nisl. Vega donec pretium feugiat ligula, id convallis lacus accumsan non. Duis interdum tristique eleifend.</p>
    </main>
    <footer>
        <p>© Усольцева Ксения Михайловна 2026</p>
    </footer>
</body>

</html>