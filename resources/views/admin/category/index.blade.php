@extends('layout')
@extends('components/admin/sidebar')

@section('category')
    <div class="admin">
        <h2 class="admin__title">
            Категории
        </h2>
        <div class="admin__table">
            <div class="admin__table_row">
                <span class="admin__table_id admin__table_name">ID</span>
                <p class="admin__table_title admin__table_name">Название</p>
                <span class="admin__table_actions admin__table_name">Действия</span>
            </div>
            @foreach ($categories as $category)
                <div class="admin__table_row">
                    <span class="admin__table_id">{{ $category->id }}</span>
                    <p class="admin__table_title">{{ $category->title }}</p>
                    <div class="admin__table_link-row">
                        <a class="admin__table_link" href="{{ route('admin.category.show', $category->id) }}">
                            <span class="material-symbols-outlined admin__table_eye">
                                visibility
                            </span>
                        </a>
                        <a class="admin__table_link" href="{{ route('admin.category.edit', $category->id) }}">
                            <span class="material-symbols-outlined admin__table_pen">
                                edit
                            </span>
                        </a>
                        <form class="admin__table_link" action="{{ route('admin.category.delete', $category->id) }}" method="POST">
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
        <a class="admin__button" href="{{ route('admin.category.create') }}">
            Добавить
        </a>
    </div>
@endsection
