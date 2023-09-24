@section('header')
    <header class="header">
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
