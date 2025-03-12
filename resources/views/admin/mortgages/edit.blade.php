@extends('layouts.app')

@section('title', 'Список ипотек')

@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">✏️ Редактировать ипотеку: {{ $mortgage->title }}</h5>
            <form action="{{ route('admin.mortgages.update', $mortgage->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Название</label>
                    <input type="text" class="form-control" name="title" value="{{ $mortgage->title }}">
                    <div class="form-text">Полный адрес дома или квартиры</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Процентная ставка</label>
                    <input type="number" min="1" max="99" class="form-control" name="percent" value="{{ $mortgage->percent }}">
                    <div class="form-text">Значение в %</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Минимальный взнос</label>
                    <input type="number" class="form-control" name="min_first_payment" value="{{ $mortgage->min_first_payment }}">
                    <div class="form-text">Значение в рублях</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Максимальная цена</label>
                    <input type="number" class="form-control" name="max_price" value="{{ $mortgage->max_price }}">
                    <div class="form-text">Значение в рублях</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Минимальная цена</label>
                    <input type="number" class="form-control" name="min_price" value="{{ $mortgage->min_price }}">
                    <div class="form-text">Значение в рублях</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Минимальный срок</label>
                    <input type="number" min="1" class="form-control" name="min_term" value="{{ $mortgage->min_term }}">
                    <div class="form-text">Значение в годах</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Максимальный срок</label>
                    <input type="number" max="30" class="form-control" name="max_term" value="{{ $mortgage->max_term }}">
                    <div class="form-text">Значение в годах</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="is_active" value="1" {{ $mortgage->is_active ? 'checked' : '' }}>
                    <label class="form-check-label">Активна</label>
                </div>
                <button type="submit" class="btn btn-outline-success">💾 Сохранить</button>
            </form>
                <a class="btn btn-outline-primary mt-2" href="{{ route('admin.mortgages.index') }}">🔙 Назад</a>
        </div>
    </div>
@endsection