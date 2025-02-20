@extends('layouts.app')

@section('content')
    <h1>✏️ Редактировать ипотеку</h1>

    <form action="{{ route('admin.mortgages.update', $mortgage->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Название</label>
        <input type="text" name="title" value="{{ $mortgage->title }}" required>

        <label>Процентная ставка</label>
        <input type="number" name="percent" value="{{ $mortgage->percent }}" required>

        <label>Мин. взнос</label>
        <input type="number" name="min_first_payment" value="{{ $mortgage->min_first_payment }}" required>

        <label>Макс. цена</label>
        <input type="number" name="max_price" value="{{ $mortgage->max_price }}" required>

        <label>Мин. цена</label>
        <input type="number" name="min_price" value="{{ $mortgage->min_price }}" required>

        <label>Мин. срок</label>
        <input type="number" name="min_term" value="{{ $mortgage->min_term }}" required>

        <label>Макс. срок</label>
        <input type="number" name="max_term" value="{{ $mortgage->max_term }}" required>

        <label>
            <input type="checkbox" name="is_active" value="1" {{ $mortgage->is_active ? 'checked' : '' }}>
            Активна
        </label>

        <button type="submit">💾 Сохранить</button>
    </form>

    <a href="{{ route('admin.mortgages.index') }}">🔙 Назад</a>
@endsection