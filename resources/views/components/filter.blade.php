@props(['sort', 'status'])

<div>
    <div class="mb-2">
        <span class="mr-2.5">сортировка по дате создания:</span>
        <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}" class="border border-black rounded-[20px] py-1.25 px-5">сначала новые</a>
        <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}" class="border border-black rounded-[20px] py-1.25 px-5">сначала старые</a>
        <a href="{{ route('reports.index') }}" class="border border-black rounded-[20px] py-1.25 px-5">сбросить</a>
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