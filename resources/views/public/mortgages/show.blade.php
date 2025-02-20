@extends('layouts.app')

@section('content')
    <h1>📄 {{ $mortgage->title }}</h1>
    <p><strong>Процентная ставка:</strong> {{ $mortgage->percent }}%</p>
    <p><strong>Стоимость недвижимости:</strong> от {{ $mortgage->min_price }} до {{ $mortgage->max_price }}</p>
    <p><strong>Первоначальный взнос:</strong> от {{ $mortgage->min_first_payment }}%</p>
    <p><strong>Срок ипотеки:</strong> от {{ $mortgage->min_term }} до {{ $mortgage->max_term }} лет</p>
    <a href="{{ route('home') }}">🔙 Назад к списку</a>
@endsection