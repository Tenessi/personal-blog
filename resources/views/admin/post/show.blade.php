@extends('layout')
@extends('components/admin/sidebar')

@section('post')
    <div class="admin">
        <h2 class="admin__title admin__show_title">
            {{ $post->title }}
        </h2>
        <div class="admin__show_row">
            <h2 class="admin__show_text">
                ID
            </h2>
            <p class="admin__show_text">{{ $post->id }}</p>
            <span class="admin__show_text admin__show_action">Действия</span>
        </div>
        <div class="admin__show_row">
            <h2 class="admin__show_text">
                Название поста
            </h2>
            <p class="admin__show_text">{{ $post->title }}</p>
            <a class="admin__show_text" href="{{ route('admin.post.edit', $post->id) }}">
                <span class="material-symbols-outlined admin__table_pen">
                    edit
                </span>
            </a>
            <form class="admin__show_text" action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <span class="material-symbols-outlined admin__table_delete">
                        delete
                    </span>
                </button>
            </form>
        </div>
        <div class="admin__show_row">
            <span class="admin__show_text">Контент</span>
            <p class="admin__show_content">{{ $post->content }}</p>
        </div>
    </div>
@endsection
