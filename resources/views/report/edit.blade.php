@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <main class="report-main">
        <form action="{{ route('reports.update', $report->id) }}" method="POST" class="reports-form">
            @csrf
            @method('PUT')
            <input type="text" name="number" value="{{ $report->number }}" required>
            <textarea name="description" required>{{ $report->description }}</textarea>
            <input type="submit" value="обновить" class="reports-form-btn">
        </form>
    </main>
</x-app-layout>