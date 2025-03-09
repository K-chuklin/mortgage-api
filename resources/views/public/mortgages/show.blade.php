@extends('layouts.app')

@section('content')
<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title">📄 {{ $mortgage->title }}</h5>
    <p class="card-text"><strong>Процентная ставка:</strong> {{ $mortgage->percent }}%</p>
    <p class="card-text"><strong>Стоимость недвижимости:</strong> от {{ $mortgage->min_price }} до {{ $mortgage->max_price }}</p>
    <p class="card-text"><strong>Первоначальный взнос:</strong> от {{ $mortgage->min_first_payment }}%</p>
    <p class="card-text"><strong>Срок ипотеки:</strong> от {{ $mortgage->min_term }} до {{ $mortgage->max_term }} лет</p>
    <a href="{{ route('home') }}" class="btn btn-outline-primary">🔙 Назад к списку</a>
  </div>
</div>

@endsection