@extends('layout')

@section('admin_sidebar')
    <div class="admin__sidebar">
        <form action="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit()" method="POST">
            @csrf
            <a class="admin__button_exit" href="{{ route('logout') }}">
                Выйти
            </a>
        </form>
        <a class="admin__button" href="{{ route('main.index') }}">
            На главную страницу
        </a>
        <a class="admin__button" href="{{ route('admin.post.index') }}">
            Посты
        </a>
        <a class="admin__button" href="{{ route('admin.category.index') }}">
            Категории
        </a>
    </div>
@endsection

@section('category')
    <div class="admin">
        <h2 class="admin__title">
            Добавление категории
        </h2>
        <form class="admin__form" action="{{ route('admin.category.store') }}" method="POST">
            @csrf
            @error('title')
                <span class="login__error">Необходимо заполнить поле.</span>
            @enderror
            <input class="admin__form_input" name="title" placeholder="Название категории" type="text">
            <button type="submit" class="admin__button">
                Добавить
            </button>
        </form>
    </div>
@endsection
