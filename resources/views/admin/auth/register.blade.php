@extends('layout')

@section('header')
    <header class="header">
        <nav class="header__nav">
            <a class="header__link" href="{{ route('main.index')}}">
                ГЛАВНАЯ
            </a>
            <a class="header__link" href="#">
                СТАТЬИ
            </a>
            <a class="header__link" href="#">
                ОБО МНЕ
            </a>
        </nav>
        <div class="header__right-block">
            <a class="header__link" href="{{ route('login')}}">
                ПРОФИЛЬ
            </a>
            <input class="header__search" type="text" placeholder="Поиск по блогу">
        </div>
    </header>
@endsection

@section('sidebar')
    <div class="sidebar">
        <img class="sidebar__background" src="/images/sidebar/sidebar-background.jpg" alt="Work place">
        <div class="sidebar__data">
            <div class="sidebar__profile">
                <div class="sidebar__profile_block">
                    <img class="sidebar__profile_photo" src="/images/sidebar/Profile.jpg" alt="Profile photo">
                </div>
            </div>
            <h3 class="sidebar__profile_username">
                Кротов Сергей
            </h3>
            <h4 class="sidebar__profile_work">
                блог php-разработчика
            </h4>
            <p class="sidebar__profile_description">
                Junior php-разработчик. Практик верстки сайтов. Созданием сайтов занимаюсь с 2022 года. Разработал несколько сових проектов, которые можно посмотреть на моём GitHub.
            </p>
        </div>
        <div class="sidebar__buttons">
            <a href="#" class="sidebar__buttons_button sidebar__buttons_portfolio">
                Мои работы
            </a>
            <a href="#" class="sidebar__buttons_message sidebar__buttons_button">
                Написать мне
            </a>
        </div>
        <div class="sidebar__admin">
            <a class="sidebar__buttons_button sidebar__admin_button" href="{{ route('admin.login') }}">
                Для администраторов
            </a>
        </div>
    </div>
@endsection

@section('register')
    <div class="login">
        <h2 class="login__title">Регистрация администратора</h2>
        <form class="login__form" action="{{ route('admin.register') }}" method="POST" autocomplete="off">
            @csrf

            @error('name')
                <span class="login__error">{{$message}}</span>
            @enderror
            <input value="{{ old('name') }}" id="name" class="login__input {{ $errors->has('name') ? 'login__input_red' : 'login__input'}}" name="name" placeholder="Имя и фамилия" type="text">
            @error('email')
                <span class="login__error">{{$message}}</span>
            @enderror
            <input value="{{ old('email') }}" id="email" class="login__input {{ $errors->has('email') ? 'login__input_red' : 'login__input' }}" name="email" placeholder="Почтовый адрес" type="email">
            @error('password')
                <span class="login__error">{{$message}}</span>
            @enderror
            <input id="password" class="login__input {{ $errors->has('password') ? 'login__input_red' : 'login__input' }}" name="password" placeholder="Новый пароль" type="password">
            @error('password_confirmation')
                <span class="login__error">{{$message}}</span>
            @enderror
            <input id="password_confirmation" class="login__input {{ $errors->has('password_confirmation') ? 'login__input_red' : 'login__input'}}" name="password_confirmation" placeholder="Подтвердить пароль" type="password">
            <button type="submit" class="login__button">Зарегистрироваться</button>
            <div class="login__not-account">
                <span>У вас есть аккаунт администратора?</span>
                <a class="login__not-account_link" href="{{ route('admin.login') }}">
                    Войти
                </a>
            </div>
        </form>
    </div>
@endsection
