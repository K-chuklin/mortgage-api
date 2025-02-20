@extends('layouts.app')

@section('content')
    <h1>🏠 Список доступных ипотек</h1>
    <ul>
        @foreach($mortgages as $mortgage)
            <li>
                <a href="{{ route('mortgages.show', $mortgage->id) }}">{{ $mortgage->title }}</a>
                ({{ $mortgage->percent }}% годовых)
            </li>
        @endforeach
    </ul>
@endsection