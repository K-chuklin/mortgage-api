@extends('layouts.app')

@section('content')
    <h1>Добавить ипотеку</h1>
    <form action="{{ route('admin.mortgages.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Название" required>
        <input type="number" name="percent" placeholder="Процент" required>
        <input type="number" name="min_first_payment" placeholder="Мин. взнос" required>
        <input type="number" name="max_price" placeholder="Макс. цена" required>
        <input type="number" name="min_price" placeholder="Мин. цена" required>
        <input type="number" name="min_term" placeholder="Мин. срок" required>
        <input type="number" name="max_term" placeholder="Макс. срок" required>
        <button type="submit">Создать</button>
    </form>
@endsection