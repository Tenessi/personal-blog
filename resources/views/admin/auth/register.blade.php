@extends('layout')
@extends('components/main/header')
@extends('components/main/sidebar')

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
