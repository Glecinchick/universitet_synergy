<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('one_piece')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row bg-dark align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <span class="fs-4">Моё будущие в ваших руках</span>
    </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/office">Личный кабинет</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/autification">Авторизация</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">Регистрация</a>
    </nav>
</div>
<div class="container">
    @yield('main_content')
</div>
</body>
</html>
