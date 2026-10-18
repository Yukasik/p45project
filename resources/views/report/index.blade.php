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
            <a href="{{ route('reports.create') }}" class="report-btn">создать заявление</a>
        </div>
        <div class="report-sort">
            <span class="report-sort-title">сортировка по дате создания:</span>
            <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">сначала новые</a>
            <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">сначала старые</a>
        </div>
        <div class="report-filter">
            <p>фильтрация по статусу заявки:</p>
            <ul>
                @foreach ($statuses as $status)
                <li>
                    <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $status->id]) }}">{{ $status->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="report-cards">
            @foreach ($reports as $report)
            <div class="report-card">
                <div class="report-card-des">
                    <h2>{{ $report -> number }}</h2>
                    <p>{{ $report -> description }}</p>
                    <p>{{ $report -> created_at -> format('d.m.Y') }}</p>
                    <p>{{ $report -> status -> name }}</p>
                </div>
                <div class="report-card-btns">
                    <form method="POST" action="{{ route('reports.destroy', $report->id) }}" class="report-card-form">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="удалить" class="report-card-btn">
                    </form>

                    <a href="{{ route('reports.edit', $report->id) }}" class="report-card-btn">редактировать</a>
                </div>
            </div>
            @endforeach
        </div>
        {{ $reports->appends(request()->query())->links() }}
    </main>
</body>

</html>