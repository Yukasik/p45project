<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>создание заявления</title>
</head>

<body>
    <main class="report-main">
        <form action="{{ route('reports.store') }}" method="POST" class="reports-form">
            @csrf
            <input type="text" name="number" placeholder="введите номер авто" required>
            <textarea name="description" placeholder="введите описание заявки" required></textarea>
            <input type="submit" value="создать" class="reports-form-btn">
        </form>
    </main>
</body>

</html>