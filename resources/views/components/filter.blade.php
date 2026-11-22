@props(['sort', 'status'])

<div>
    <div class="report-filter">
        <p>сортировка по дате создания:</p>
        <ul>
            <li>
                <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">сначала новые</a>
            </li>
            <li>
                <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">сначала старые</a>
            </li>
            <li>
                <a href="{{ route('reports.index') }}">сбросить</a>
            </li>
        </ul>


    </div>
    <div class="report-filter">
        <p>фильтрация по статусу заявки:</p>
        <ul>
            @foreach ($statuses as $status)
            <li>
                <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $status->id]) }}">{{ $status->name }}</a>
            </li>
            @endforeach
            <li>
                <a href="{{ route('reports.index') }}">сбросить</a>
            </li>
        </ul>
    </div>
</div>