@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <div class="page form-page">
        <form action="{{ route('reports.update', $report->id) }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <input type="text" name="number" value="{{ $report->number }}" class="form-input" required>
            <textarea name="description" class="form-textarea" required>{{ $report->description }}</textarea>
            <input type="submit" value="обновить" class="btn btn--block">
        </form>
    </div>
</x-app-layout>