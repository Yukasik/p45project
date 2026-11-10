<x-app-layout>
    <h1 class="admin-title">Административная панель</h1>
    <div class="admin-table">
        <table>
            <thead>
                <tr>
                    <th>ФИО</th>
                    <th>Текст заявления</th>
                    <th>Номер автомобиля</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr>
                    <td>
                        {{ $report->user->lastname }}
                        {{ $report->user->name }}
                        {{ $report->user->middlename }}
                    </td>
                    <td>{{ $report->description }}</td>
                    <td>{{ $report->number }}</td>
                    <td>
                        @if ($report->status->name === 'новое')
                        <form class="status-form" action="{{ route('reports.status.update', $report->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <select name="status_id" id="status_id" class="admin-status">
                                @foreach ($statuses as $status)
                                <option value="{{ $status->id }}" {{ $status->id == $report->status_id ? 'selected' : '' }}>
                                    {{ $status->name }}
                                </option>
                                @endforeach
                            </select>
                        </form>
                        @else
                        <p class="admin-status {{ $report->status->name === 'подтвержденно' ? 'admin-status-confirmed' : 'admin-status-rejected' }}">
                            {{ $report->status?->name }}
                        </p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>