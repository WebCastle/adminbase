<div class="topbar-left">
    <ul class="nav nav-list nav-list-topbar pull-left">
        <li>
            <a href="{{route('admin_roles_view', $role)}}">Просмотр</a>
        </li>
        <li>
            <a href="{{route('admin_roles_edit', $role)}}">Редактировать</a>
        </li>
    </ul>
</div>
<div class="topbar-right">
    <a href="{{route('admin_roles_create')}}" class="btn btn-success btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Создать роль
    </a>
</div>
