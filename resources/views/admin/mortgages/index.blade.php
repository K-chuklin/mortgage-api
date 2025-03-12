@extends('layouts.app')

@section('title', 'Список ипотек')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">📋 Список ипотек</h1>
        <a href="{{ route('admin.mortgages.create') }}" class="btn btn-primary mb-3">➕ Добавить ипотеку</a>
        <ul class="list-group">
            @foreach($mortgages as $mortgage)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        {{ $mortgage->title }} 
                        <span class="badge {{ $mortgage->is_active ? 'badge-success' : 'badge-danger' }}">
                            {{ $mortgage->is_active ? '🟢 Активна' : '🔴 Неактивна' }}
                        </span>
                    </div>
                    <div>
                        <a href="{{ route('admin.mortgages.edit', $mortgage->id) }}" class="btn btn-sm btn-warning">✏️ Редактировать</a>
                        <form action="{{ route('admin.mortgages.destroy', $mortgage->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">❌ Удалить</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection