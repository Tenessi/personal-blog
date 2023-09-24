@extends('layout')
@extends('components/main/header')
@extends('components/main/sidebar')

@section('login')
    <div class="login">
        <h2 class="login__title">Авторизация администратора</h2>
        <form class="login__form" action="{{ route('admin.login') }}" method="POST" autocomplete="off">
            @csrf

            @error('email')
                <span class="login__error">{{$message}}</span>
            @enderror
            <input class="login__input {{ $errors->has('email') ? 'login__input_red' : 'login__input'}}" value="{{ old('email') }}" name="email" placeholder="Почтовый адрес" type="email">
            <input class="login__input" name="password" placeholder="Пароль" type="password">
            <button class="login__button">Войти</button>
            <div class="login__not-account">
                <span>У вас нет есть аккаунта администратора?</span>
                <a class="login__not-account_link" href="{{ route('admin.register') }}">
                    Регистрация
                </a>
            </div>
        </form>
    </div>
@endsection
