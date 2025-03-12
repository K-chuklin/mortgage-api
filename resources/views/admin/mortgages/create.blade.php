@extends('layouts.app')

@section('content')
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">✏️ Добавить ипотеку</h5>
            <form action="{{ route('admin.mortgages.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Название</label>
                    <input type="text" class="form-control" name="title" placeholder="Название">
                    <div class="form-text">Полный адрес дома или квартиры</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Процентная ставка</label>
                    <input type="number" min="1" max="99" class="form-control" name="percent" placeholder="Процент">
                    <div class="form-text">Значение в %</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Минимальный взнос</label>
                    <input type="number" class="form-control" name="min_first_payment" placeholder="Мин.взнос">
                    <div class="form-text">Значение в рублях</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Максимальная цена</label>
                    <input type="number" class="form-control" name="max_price" placeholder="Макс. цена">
                    <div class="form-text">Значение в рублях</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Минимальная цена</label>
                    <input type="number" class="form-control" name="min_price" placeholder="Мин. цена">
                    <div class="form-text">Значение в рублях</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Минимальный срок</label>
                    <input type="number" min="1" class="form-control" name="min_term" placeholder="Мин. срок">
                    <div class="form-text">Значение в годах</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Максимальный срок</label>
                    <input type="number" max="30" class="form-control" name="max_term" placeholder="Макс. срок">
                    <div class="form-text">Значение в годах</div>
                </div>
                <button type="submit" class="btn btn-outline-success">💾 Создать</button>
            </form>
                <a class="btn btn-outline-primary mt-2" href="{{ route('admin.mortgages.index') }}">🔙 Назад</a>
        </div>
    </div>
@endsection