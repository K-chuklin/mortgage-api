<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ипотечные программы')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">🏠 Главная</a>
            <a href="{{ route('admin.mortgages.index') }}">⚙️ Админка</a>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Ипотечный сервис</p>
    </footer>
</body>
</html>