@extends('layout')
@extends('components/main/header')
@extends('components/main/sidebar')

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
