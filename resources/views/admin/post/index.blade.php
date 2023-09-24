@extends('layout')
@extends('components/admin/sidebar')

@section('post')
    <div class="admin">
        <h2 class="admin__title">
            Посты
        </h2>
        <div class="admin__table">
            <div class="admin__table_row">
                <span class="admin__table_id admin__table_name">ID</span>
                <p class="admin__table_title admin__table_name">Название</p>
                <span class="admin__table_actions admin__table_name">Действия</span>
            </div>
            @foreach ($posts as $post)
                <div class="admin__table_row">
                    <span class="admin__table_id">{{ $post->id }}</span>
                    <p class="admin__table_title">{{ $post->title }}</p>
                    <div class="admin__table_link-row">
                        <a class="admin__table_link" href="{{ route('admin.post.show', $post->id) }}">
                            <span class="material-symbols-outlined admin__table_eye">
                                visibility
                            </span>
                        </a>
                        <a class="admin__table_link" href="{{ route('admin.post.edit', $post->id) }}">
                            <span class="material-symbols-outlined admin__table_pen">
                                edit
                            </span>
                        </a>
                        <form class="admin__table_link" action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <span class="material-symbols-outlined admin__table_delete">
                                    delete
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="admin__button" href="{{ route('admin.post.create') }}">
            Добавить
        </a>
    </div>
@endsection
