@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <div class="page form-page">
        <form action="{{ route('reports.store') }}" method="POST" class="form">
            @csrf
            <x-car-input type="text" name="number" class="form-input" placeholder="введите номер авто" required />
            <textarea name="description" class="form-textarea" placeholder="введите описание заявки" required></textarea>
            <input type="submit" value="создать" class="btn btn--block">
        </form>
    </div>
</x-app-layout>