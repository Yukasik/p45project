@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <div class="page">
        <div class="page-actions">
            <a href="{{ route('reports.create') }}" class="btn btn--lg">создать заявление</a>
        </div>

        <x-filter :sort=$sort :status=$status />

        <div class="report-cards">
            @foreach ($reports as $report)
            <div class="report-card">
                <div class="report-card-des">
                    <div class="report-card-des-top">
                        <h2>{{ $report->number }}</h2>
                        <div class="report-card-btns">
                            <a href="{{ route('reports.edit', $report->id) }}">
                                <x-edit />
                            </a>

                            <form method="POST" action="{{ route('reports.destroy', $report->id) }}" class="report-card-form">
                                @method('DELETE')
                                @csrf
                                <button type="submit" aria-label="удалить">
                                    <x-delete />
                                </button>
                            </form>
                        </div>
                    </div>
                    <p>{{ $report->description }}</p>
                    <p>{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y H:i') }}</p>
                </div>
                <x-status :type="$report->status->id">
                    {{ $report->status->name }}
                </x-status>
            </div>
            @endforeach
        </div>

        {{ $reports->appends(request()->query())->links() }}
    </div>
</x-app-layout>