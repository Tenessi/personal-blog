@extends('layout')
@extends('components/main/header')
@extends('components/main/sidebar')

@section('post')
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
