@extends('layout')
@extends('components/admin/sidebar')

@section('category')
    <div class="admin">
        <h2 class="admin__title">
            Редактирование категории
        </h2>
        <form class="admin__form" action="{{ route('admin.category.update', $category->id) }}" method="POST">
            @csrf
            @method('PATCH')

            @error('title')
                <span class="login__error">Необходимо заполнить поле.</span>
            @enderror
            <input class="admin__form_input" name="title" value="{{ $category->title }}" placeholder="Название категории" type="text">
            <button type="submit" class="admin__button">
                Обновить
            </button>
        </form>
    </div>
@endsection
