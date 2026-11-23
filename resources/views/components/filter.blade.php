@props(['sort', 'status'])

<div>
    <div class="report-filter">
        <!-- <p>Фильтрация по статусу заявки:</p> -->
        <ul>
            <li class="{{ !$status ? 'active' : '' }}">
                <a href="{{ route('reports.index') }}">все</a>
            </li>
            @foreach ($statuses as $item)
            <li class="{{ $status == $item->id ? 'active' : '' }}">
                <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $item->id]) }}">
                    {{ $item->name }}
                </a>
            </li>
            @endforeach
        </ul>
        <div class="report-sort">
            <!-- <label for="report-sort">Сортировка по дате создания:</label> -->

            <select id="report-sort">
                <option value="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}"
                    {{ $sort === 'desc' ? 'selected' : '' }}>
                    Сначала новые
                </option>

                <option value="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}"
                    {{ $sort === 'asc' ? 'selected' : '' }}>
                    Сначала старые
                </option>
            </select>
        </div>
    </div>
</div>