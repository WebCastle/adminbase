<div class="topbar-left">
    <ul class="nav nav-list nav-list-topbar pull-left">
        <li>
            <a href="{{route('admin_users_list')}}">Пользователи</a>
        </li>
        <li>
            <a href="{{route('admin_roles_list')}}">Роли</a>
        </li>
        <li class=" ">
            <a href="{{route('admin_perms_list')}}">Права доступа</a>
        </li>
    </ul>
</div>
<div class="topbar-right">
    <a class="btn btn-success btn-sm light fw600 ml10" href="{{route('admin_users_create')}}">
        <span class="fa fa-plus pr5"></span> Создать пользователя
    </a>
    <a class="btn btn-success btn-sm light fw600 ml10" href="{{route('admin_roles_create')}}">
        <span class="fa fa-plus pr5"></span> Создать роль
    </a>
    <a class="btn btn-success btn-sm light fw600 ml10" href="{{route('admin_perms_create')}}">
        <span class="fa fa-plus pr5"></span> Создать право доступа
    </a>
</div>
