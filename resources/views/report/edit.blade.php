<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>редактирование заявления</title>
</head>

<body>
    <main class="report-main">
        <form action="{{ route('reports.update', $report->id) }}" method="POST" class="reports-form">
            @csrf
            @method('PUT')
            <input type="text" name="number" value="{{ $report->number }}" required>
            <textarea name="description" required>{{ $report->description }}</textarea>
            <input type="submit" value="обновить" class="reports-form-btn">
        </form>
    </main>
</body>

</html>