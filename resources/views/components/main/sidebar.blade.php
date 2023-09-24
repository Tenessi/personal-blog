@section('sidebar')
    <div id="sidebar" class="sidebar">
        <img class="sidebar__background" src="/images/sidebar/sidebar-background.jpg" alt="Work place">
        <div class="sidebar__data">
            <div class="sidebar__profile">
                <div class="sidebar__profile_block">
                    <img class="sidebar__profile_photo" src="/images/sidebar/Profile.jpeg" alt="Profile photo">
                </div>
            </div>
            <div class="sidebar__profile_user-block">
                <h3 class="sidebar__profile_username">
                    Кротов Сергей
                </h3>
                <h4 class="sidebar__profile_work">
                    блог php-разработчика
                </h4>
            </div>
        </div>
        <p class="sidebar__profile_description">
            Junior php-разработчик. Практик верстки сайтов. Созданием сайтов занимаюсь с 2022 года. Разработал несколько
            сових проектов, которые можно посмотреть на моём GitHub.
        </p>
        <a class="sidebar__home_link" href="{{ route('main.index') }}">
            Главная страница
        </a>
        <div class="sidebar__buttons">
            <a href="#" class="sidebar__buttons_button sidebar__buttons_portfolio">
                Мои работы
            </a>
            <a href="#" class="sidebar__buttons_message sidebar__buttons_button">
                Написать мне
            </a>
        </div>
        <div class="sidebar__admin">
            <a class="sidebar__buttons_button sidebar__admin_button" href="{{ route('admin.category.index') }}">
                Для администраторов
            </a>
        </div>
    </div>
@endsection
