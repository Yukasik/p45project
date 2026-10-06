<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>заявления</title>
</head>
<body>
    <main>
        <div>
            <a href="{{ route('reports.create') }}">создать заявление</a>
        </div>
        <div class="cards">
            @foreach ($reports as $report)
                <div class="card">
                    <h2>{{ $report -> number }}</h2>
                    <p>{{ $report -> description }}</p>
                    <p>{{ $report -> created_at -> format('d.m.Y') }}</p>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>