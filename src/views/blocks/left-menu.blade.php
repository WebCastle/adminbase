<div class="nano-content">

    <!-- sidebar menu -->
    <ul class="nav sidebar-menu">
        <li class="sidebar-label pt20">Menu</li>

        <li data-page="admin-main">
            <a href="{{route('dashboard')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Главная</span>
            </a>
        </li>

        <li class="sidebar-label pt20">Пользователи</li>

        <li data-page="admin-users">
            <a href="{{route('admin_users_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Все пользователи</span>
            </a>
        </li>
        <li data-page="admin-roles">
            <a href="{{route('admin_roles_list')}}">
                <span class="fa fa-group"></span>
                <span class="sidebar-title">Групы пользователей</span>
            </a>
        </li>
        <li data-page="admin-perms">
            <a href="{{route('admin_perms_list')}}">
                <span class="glyphicons glyphicons-tags"></span>
                <span class="sidebar-title">Права доступа</span>
            </a>
        </li>

        <li class="sidebar-label pt20">URLS</li>

        <li data-page="admin-users">
            <a href="{{route('aliases_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Алиасы</span>
            </a>
        </li>
        <li data-page="admin-roles">
            <a href="{{route('admin_meta_list')}}">
                <span class="fa fa-group"></span>
                <span class="sidebar-title">Мета теги</span>
            </a>
        </li>
        <li data-page="admin-roles">
            <a href="{{route('languages_list')}}">
                <span class="fa fa-group"></span>
                <span class="sidebar-title">Языки </span>
            </a>
        </li>

        <li class="sidebar-label pt20">Контент</li>

        <li data-page="admin-users">
            <a href="{{route('admin_menu_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Меню</span>
            </a>
            <a href="{{route('admin_pages_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Страницы</span>
            </a>
            </a>
            <a href="{{route('admin_news_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Новости</span>
            </a>
            <a href="{{route('admin_word_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Перевод интерфейса</span>
            </a>
        </li>

        <li class="sidebar-label pt20">Блог</li>
        <li data-page="admin-users">
            <a href="{{route('admin_post_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Статьи</span>
            </a>
            <a href="{{route('admin_post_category_list')}}">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Категории</span>
            </a>
        </li>

        <li class="sidebar-label pt20">Продукты</li>

        <li class="active">
            <a href="{{route('admin_products_list')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Все продукты</span>
            </a>
            <a href="{{route('admin_products_create')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Создать продукт</span>
            </a>
            <a href="{{route('admin_colors_list')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Цвета</span>
            </a>
            <a href="{{route('admin_categories_list')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Категории</span>
            </a>
            <a href="{{route('admin_collection_list')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Коллекции</span>
            </a>
        </li>

        <li class="sidebar-label pt20">Настройки</li>

        <li class="active">
            <a href="{{route('dashboard')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Основные</span>
            </a>
            <a href="{{route('dashboard')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">SEO</span>
            </a>
            <a href="{{route('dashboard')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Єкспорт</span>
            </a>
        </li>

        <li class="sidebar-label pt20">Продажи</li>

        <li class="active">
            <a href="{{route('admin_orders_list')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Продажи</span>
            </a>
            <a href="{{route('dashboard')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">SEO</span>
            </a>
            <a href="{{route('dashboard')}}">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Єкспорт</span>
            </a>
        </li>

        <!-- sidebar bullets -->
        <li class="sidebar-label pt20">Разное</li>
        <li class="sidebar-proj">
            <a href="{{route('dashboard')}}">
                <span class="fa fa-dot-circle-o text-primary"></span>
                <span class="sidebar-title">На сайт</span>
            </a>
            <a href="{{route('dashboard')}}">
                <span class="fa fa-dot-circle-o text-warning"></span>
                <span class="sidebar-title">Очистить кэш</span>
            </a>
        </li>


    </ul>
    <div class="sidebar-toggle-mini">
        <a href="#">
            <span class="fa fa-sign-out"></span>
        </a>
    </div>
</div>