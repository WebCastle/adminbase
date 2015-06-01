<div class="topbar-left">
    <ul class="nav nav-list nav-list-topbar pull-left">
        <li>
            <a href="{{route('admin_users_view', $user)}}">Просмотр</a>
        </li>
        <li>
            <a href="{{route('admin_users_edit', $user)}}">Редактировать</a>
        </li>
        <li>
            <a href="{{route('admin_users_edit', $user)}}">Смена пароля</a>
        </li>
        <li>
            <a href="">Действия</a>
        </li>
    </ul>
</div>
<div class="topbar-right">
    <a href="{{route('admin_users_create')}}" class="btn btn-success btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Создать пользователя
    </a>
</div>
