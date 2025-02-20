@extends('layouts.app')

@section('content')
    <h1>📋 Список ипотек</h1>
    <a href="{{ route('admin.mortgages.create') }}">➕ Добавить ипотеку</a>
    <ul>
        @foreach($mortgages as $mortgage)
            <li>
                {{ $mortgage->title }} 
                ({{ $mortgage->is_active ? '🟢 Активна' : '🔴 Неактивна' }})
                <a href="{{ route('admin.mortgages.edit', $mortgage->id) }}">✏️ Редактировать</a>
                <form action="{{ route('admin.mortgages.destroy', $mortgage->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">❌ Удалить</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection