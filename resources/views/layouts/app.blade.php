<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ипотечные программы')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-light py-3 mb-4">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">🏠 Главная</a>
            <a class="navbar-brand" href="{{ route('admin.mortgages.index') }}">⚙️ Админка</a>
        </nav>
    </header>
    
    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-light py-3 mt-4">
        <div class="container">
            <p class="text-center">&copy; 2025 Ипотечный сервис</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>