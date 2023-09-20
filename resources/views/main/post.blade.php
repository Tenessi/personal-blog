@extends('layout')

@section('header')
    <header id="header" class="header">
        <div class="header__burger">
            <span class="header__burger_line header__burger_top"></span>
            <span class="header__burger_line header__burger_center"></span>
            <span class="header__burger_line header__burger_bottom"></span>
        </div>
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
    <div id="sidebar" class="sidebar">
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

@section('main')
    <div class="post">
        <div class="post__container">
            <a class="post__back" href="{{ route('main.index') }}">
                Вернуться назад
            </a>
            <h2 class="post__title">
                {{ $post->title }}
            </h2>
            <div class="post__created">
                <span class="post__created_item">
                    {{ $post->created_at }}
                </span>
                <span class="post__created_item post__created_dot">
                    •
                </span>
                <span class="post__created_item">
                    {{ $post->category->title }}
                </span>
            </div>
            <p class="post__content">
                {{ $post->content }}
            </p>
            <div class="post__interesting">
                <h6 class="post__interesting_title">
                    Интересно почитать
                </h6>
                <div class="post__interesting_block">
                    @foreach ($randomPosts as $post)
                        <a class="post__interesting_post" href="{{ route('main.post.index', $post->id) }}">
                            <h6 class="post__interesting_post-title">
                                {{ $post->title }}
                            </h6>
                            <span class="post__interesting_post-date">
                                {{ $post->created_at }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
