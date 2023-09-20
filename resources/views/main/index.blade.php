@extends('layout')

@section('header')
    <header class="header">
        <div class="header__burger">
            <span class="header__burger_line header__burger_top"></span>
            <span class="header__burger_line header__burger_center"></span>
            <span class="header__burger_line header__burger_bottom"></span>
        </div>
        <nav class="header__nav">
            <a class="header__link" href="{{ route('main.index') }}">
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
            <a class="header__link" href="{{ route('login') }}">
                ПРОФИЛЬ
            </a>
            <input class="header__search" type="text" placeholder="Поиск по блогу">
        </div>
    </header>
@endsection

@section('sidebar')
    <div id="sidebar" class="sidebar">
        <img class="sidebar__background" src="/images/sidebar/sidebar-background.jpg" alt="Work place">
        <div class="sidebar__data">
            <div class="sidebar__profile">
                <div class="sidebar__profile_block">
                    <img class="sidebar__profile_photo" src="/images/sidebar/Profile.jpg" alt="Profile photo">
                </div>
            </div>
            <div class="sidebar__profile_user-block">
                <h3 class="sidebar__profile_username">
                    Кротов Сергей
                </h3>
                <h4 class="sidebar__profile_work">
                    блог php-разработчика
                </h4>
            </div>
        </div>
        <p class="sidebar__profile_description">
            Junior php-разработчик. Практик верстки сайтов. Созданием сайтов занимаюсь с 2022 года. Разработал несколько
            сових проектов, которые можно посмотреть на моём GitHub.
        </p>
        <a class="sidebar__home_link" href="{{ route('main.index') }}">
            Главная страница
        </a>
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

@section('main')
    <div class="main__sidebar"></div>
    <div class="main">
        @foreach ($posts as $post)
            <div class="main__post">
                <h4 class="main__post_title">
                    {{ $post->title }}
                </h4>
                <p class="main__post_text">
                    {{ $post->content }}
                </p>
                <div class="main__post_bottom">
                    <div class="main__post_bottom_left-block">
                        <span class="main__post_item">
                            {{ $post->created_at }}
                        </span>
                        <span class="main__post_item main__post_item-dot">
                            •
                        </span>
                        <span class="main__post_item">
                            {{ $post->category->title }}
                        </span>
                    </div>
                    <a class="main__post_button" href="{{ route('main.post.index', $post->id) }}">
                        Читать
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
