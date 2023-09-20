<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krotov Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite(['resources/scss/app.scss', 'resources/css/reset.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        @yield('sidebar')
        @yield('admin_sidebar')
        <div class="layout">
            <div>
                @yield('header')
                @yield('main')
                @yield('login')
                @yield('register')
                @yield('category')
                @yield('post')
            </div>
        </div>
    </div>
</body>
</html>
