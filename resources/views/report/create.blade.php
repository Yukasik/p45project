@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <main class="report-main">
        <form action="{{ route('reports.store') }}" method="POST" class="reports-form">
            @csrf
            <input type="text" name="number" placeholder="введите номер авто" required>
            <textarea name="description" placeholder="введите описание заявки" required></textarea>
            <input type="submit" value="создать" class="reports-form-btn">
        </form>
    </main>
</x-app-layout>