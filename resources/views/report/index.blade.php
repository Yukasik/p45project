@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <main class="main-report">
        <div class="my-5">
            <a href="{{ route('reports.create') }}" class="bg-black px-5 py-1.25 rounded-[20px] cursor-pointer text-white hover:bg-gray-700 transition duration-200 text-lg">создать заявление</a>
        </div>
        <x-filter :sort=$sort :status=$status>

        </x-filter>
        <div class="report-cards">
            @foreach ($reports as $report)
            <div class="report-card">
                <div class="report-card-des">
                    <h2>{{ $report -> number }}</h2>
                    <p>{{ $report -> description }}</p>
                    <p>{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y h:i');}}</p>
                    <x-status :type="$report->status->id">
                        {{ $report -> status -> name }}
                    </x-status>
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
</x-app-layout>