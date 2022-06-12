<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Онлайн платформа</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('css/favi.ico')}}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header" style="background: #000000">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-white h1" href="{{ route('main.index') }}">ОНЛАЙН ПЛАТФОРМА</a>
            <button class="navbar-toggler d-lg-none text-white" type="button" data-toggle="collapse" data-target="#edicaMainNav">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('course.index') }}">Курсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('lesson.index') }}">Лекции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('test.index') }}">Тесты</a>
                        </li>
                    @endauth
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Курсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Лекции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Тесты</a>
                        </li>
                    @endguest
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li>
                        @auth()
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Личный кабинет</a>
                        @endauth
                        @guest()
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Войти</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="edica-footer" style="
   margin-top: 407px;
">
    <div class="container">
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="{{ route('course.index') }}">Курсы</a>
                <a href="{{ route('main.index') }}">Лекции</a>
                <a href="{{ route('test.index') }}">Тесты</a>
            </nav>
            <p class="mb-0">© LMS. 2022. Все права защищены.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
