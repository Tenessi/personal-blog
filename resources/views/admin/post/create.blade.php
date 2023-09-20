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

@section('post')
    <div class="admin">
        <h2 class="admin__title">
            Добавление поста
        </h2>
        <form class="admin__form" action="{{ route('admin.post.store') }}" method="POST">
            @csrf
            @error('title')
                <span class="login__error">Необходимо заполнить поле.</span>
            @enderror
            <input class="admin__form_input" value="{{ old('title') }}" name="title" placeholder="Название поста"
                type="text">
            @error('content')
                <span class="login__error">Необходимо заполнить поле.</span>
            @enderror
            <textarea class="admin__form_input" value="{{ old('content') }}" name="content">
                {{ old('content') }}
            </textarea>
            <select class="admin__select" name="category_id">
                @foreach ($categories as $category)
                    <option class="admin__select_item" value="{{ $category->id }}"
                        {{ $category->id == old('category_id') ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="admin__button">
                Добавить
            </button>
        </form>
    </div>
@endsection
