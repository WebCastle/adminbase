@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/css/select2.min.css" rel="stylesheet" />
@stop

@section('top_tab')
    @include('entrust.users.top_tab', ['user' => $user])
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_users_edit', $user) !!}
@stop

@section('content')
<section class="table-layout" id="content">
    <div class="row mt30">
        <div class="col-md-6">
            <div class="panel br-t bw5 br-primary mn">
                <div class="panel-heading hidden">
                    <span class="panel-icon">
                        <i class="fa fa-pencil"></i>
                    </span>
                    <span class="panel-title"> Title</span>
                </div>

                <div class="panel-body pn">
                    <div class="p25 br-b">

                        <h2 class="fw200 mb20 mt10">
                            Редактирование Пользователя {{ $user->name }}
                        </h2>
                        {!! form($form) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="" class="panel mobile-controls">
                <div class="panel-heading">
                    <span class="panel-title text-info fw700"> Роль пользователя</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-med-1 admin-form tc-bold-last ">
                        <thead>
                            <tr class="hidden">
                                <th>Роль</th>
                                <th>Описание</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{$role->display_name}}
                                </td>
                                <td>
                                    {{$role->description}}
                                </td>
                                <td>
                                    <label class=" switch switch-custom block mbn">
                                        <input type="checkbox"
                                               {{ $user->hasRole($role->name) ? "checked" : ""  }}
                                               class="legend-switch role" data-role-id="{{$role->id}}" data-user-id="{{$user->id}}">
                                        <label for="role1" data-on="ON" data-off="OFF"></label>
                                        <span></span>
                                    </label>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
@stop


@section('javascripts')
<script>
    $(".role").on('change', function(){
        var role_id = $(this).attr('data-role-id');
        var user_id = $(this).attr('data-user-id');
        var allow = this.checked ? 1 : 0;
        var checkbox = this;

        $.ajax({
            url: "/admin/ajax/users/role",
            data: "role_id="+role_id+"&user_id="+user_id+"&allow="+allow  ,
            method: "POST",
            dataType: "json",
            success: function(response){
                new PNotify({
                    title: "ОК",
                    text: "Права доступа обновлены",
                    addclass: "stack-topleft",
                    type: 'success',
                    delay: 2000
                });

            },
            error: function(response){
                checkbox.checked = !allow;
                new PNotify({
                    title: "Ошибка",
                    text: "Обратитесь к администратору",
                    addclass: "stack-topleft",
                    type: 'error',
                    delay: 2000
                })
            }
        });
    })
</script>
@stop