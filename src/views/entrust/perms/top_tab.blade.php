<div class="topbar-left">
    <ul class="nav nav-list nav-list-topbar pull-left">
        <li>
            <a href="{{route('admin_perms_view', $permission)}}">Просмотр</a>
        </li>
        <li>
            <a href="{{route('admin_perms_edit', $permission)}}">Редактировать</a>
        </li>
    </ul>
</div>
<div class="topbar-right">
    <a href="{{route('admin_perms_create')}}" class="btn btn-success btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Создать право доступа
    </a>
</div>
