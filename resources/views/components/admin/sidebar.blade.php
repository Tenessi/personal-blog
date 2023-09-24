@section('admin_sidebar')
    <div class="admin__sidebar">
        <form action="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit()" method="POST">
            @csrf
            <a class="admin__button_exit" href="{{ route('logout') }}">
                Выйти
            </a>
        </form>
        <a class="admin__button" href="{{ route('main.index') }}">
            На главную страницу
        </a>
        <a class="admin__button" href="{{ route('admin.post.index') }}">
            Посты
        </a>
        <a class="admin__button" href="{{ route('admin.category.index') }}">
            Категории
        </a>
    </div>
@endsection
