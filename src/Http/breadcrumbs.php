<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Главная', route('dashboard'));
});

// Список пользователей
Breadcrumbs::register('users_list', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Пользователи', route('admin_users_list'));
});

// Список пользователей
Breadcrumbs::register('admin_users_view', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('users_list');
    $breadcrumbs->push($user->name, route('admin_users_view', ['id'=>$user->id]));
});

Breadcrumbs::register('admin_users_edit', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('admin_users_view', $user);
    $breadcrumbs->push('Редактирование', route('admin_users_edit', ['id'=>$user->id]));
});

Breadcrumbs::register('admin_users_create', function($breadcrumbs)
{
    $breadcrumbs->parent('users_list');
    $breadcrumbs->push('Создание пользователя', route('admin_users_create'));
});




// Права доступа
Breadcrumbs::register('admin_perms', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Права доступа', route('admin_perms_list'));
});

// Создание права доступа
Breadcrumbs::register('admin_perms_create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin_perms');
    $breadcrumbs->push('Создание права доступа', route('admin_perms_create'));
});

// Просмотр права доступа
Breadcrumbs::register('admin_perms_view', function($breadcrumbs, $permission)
{
    $breadcrumbs->parent('admin_perms');
    $breadcrumbs->push($permission->display_name, route('admin_perms_view', ['id'=>$permission->id]));
});

// Редактирование права доступа
Breadcrumbs::register('admin_perms_edit', function($breadcrumbs, $permission)
{
    $breadcrumbs->parent('admin_perms_view', $permission);
    $breadcrumbs->push('Редактирование  ', route('admin_perms_edit', ['id'=>$permission->id]));
});







// Роли пользователей
Breadcrumbs::register('admin_roles', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Роли пользователей', route('admin_roles_list'));
});

// Просмотр роли
Breadcrumbs::register('admin_roles_view', function($breadcrumbs, $role)
{
    $breadcrumbs->parent('admin_roles');
    $breadcrumbs->push($role->display_name, route('admin_roles_view', ['id'=>$role->id]));
});

// Создание роли
Breadcrumbs::register('admin_roles_create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin_roles');
    $breadcrumbs->push('Создание роли', route('admin_roles_create'));
});

// Редактирование роли
Breadcrumbs::register('admin_roles_edit', function($breadcrumbs, $role)
{
    $breadcrumbs->parent('admin_roles_view', $role);
    $breadcrumbs->push('Редактирование', route('admin_roles_edit', ['id'=>$role->id]));
});

// Права доступа роли
Breadcrumbs::register('admin_roles_perms', function($breadcrumbs, $role)
{
    $breadcrumbs->parent('admin_roles_view', $role);
    $breadcrumbs->push(_t('Парва достукпа'), route('admin_roles_perms', ['id'=>$role->id]));
});






Breadcrumbs::register('admin_users', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Пользователи', route('admin_users_list'));
});
