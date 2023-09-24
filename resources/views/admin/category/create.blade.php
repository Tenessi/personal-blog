@extends('layout')
@extends('components/admin/sidebar')

@section('category')
    <div class="admin">
        <h2 class="admin__title">
            Добавление категории
        </h2>
        <form class="admin__form" action="{{ route('admin.category.store') }}" method="POST">
            @csrf
            @error('title')
                <span class="login__error">Необходимо заполнить поле.</span>
            @enderror
            <input class="admin__form_input" name="title" placeholder="Название категории" type="text">
            <button type="submit" class="admin__button">
                Добавить
            </button>
        </form>
    </div>
@endsection
