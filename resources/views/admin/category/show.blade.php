@extends('layout')
@extends('components/admin/sidebar')

@section('category')
    <div class="admin">
        <h2 class="admin__title admin__show_title">
            {{ $category->title }}
        </h2>
        <div class="admin__show_row">
            <h2 class="admin__show_text">
                ID
            </h2>
            <p class="admin__show_text">{{ $category->id }}</p>
            <span class="admin__show_text admin__show_action">Действия</span>
        </div>
        <div class="admin__show_row">
            <h2 class="admin__show_text">
                Название категории
            </h2>
            <p class="admin__show_text">{{ $category->title }}</p>
            <a class="admin__show_text" href="{{ route('admin.category.edit', $category->id) }}">
                <span class="material-symbols-outlined admin__table_pen">
                    edit
                </span>
            </a>
            <form class="admin__show_text" action="{{ route('admin.category.delete', $category->id) }}" method="POST">
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
@endsection
