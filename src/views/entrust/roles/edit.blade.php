@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/css/select2.min.css" rel="stylesheet" />
@stop

@section('top_tab')
    @include('entrust.roles.top_tab', ['role' => $role])
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_roles_edit', $role) !!}
@stop

@section('content')
<section class="table-layout roles-edit-section" id="content">
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
                        <div class="col-md-12">
                            <h2 class="fw200 mb20 mt10">
                                <h2 class="fw200 mb20 mt10">
                                    Редактирование роли {{ $role->display_name }}
                                </h2>
                            </h2>
                        </div>
                        {!! form_start($form) !!}
                        <div class="form-group">
                            <label class="control-label" for="display_name">Машинное имя</label>
                            <p class="form-control-static text-muted">{{ $role->name }}</p>
                        </div>
                        {!! form_rest($form) !!}
                    </div>
                </div>
            </div>
        </div>
        @foreach($permissionsGroups as $key => $group)

            <div class="col-md-6">
                <div class="col-md-12 admin-grid" id="grid-3">
                    <div id="p2" class="panel">
                        <div class="panel-heading">
                            <span class="panel-title text-info fw700"> Категория:  {{ $key }} </span>
                        </div>
                        <div class="panel-body pn">
                            <div class="p15 pt5 bg-light br-t">
                                <table data-chart-id="#high-line" class="table mbn admin-form fs13 table-legend">
                                    <thead>
                                        <tr class="">
                                            <th class=" ">ID</th>
                                            <th class=" ">Имя</th>
                                            <th class="text-right">
                                                <label class=" switch switch-custom block mbn">
                                                    <input type="checkbox"
                                                    data-category2="{{$key}}"
                                                    data-role-id="{{$role->id}}"
                                                    class="legend-switch category">
                                                    <label data-off="ALL" data-on="ALL" for="role{{$role->id}}"></label>
                                                    <span></span>
                                                </label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($group as $perm)
                                            <tr>
                                                <td class="fs15 fw700">{{$perm->id}}</td>
                                                <td class="fs15 fw700 ">{{$perm->display_name}}</td>
                                                <td class="text-right">
                                                    <label class="progress-button switch switch-custom block mbn">
                                                        <input type="checkbox" id="s{{$perm->id}}"
                                                               data-category="{{$perm->category}}"
                                                        {{count($role->perms()->where('permission_id', $perm->id)->get()) ? "checked" : ""}}
                                                               data-role-id="{{$role->id}}" data-perm-id="{{$perm->id}}"
                                                               class="legend-switch permission">
                                                        <label data-off="OFF" data-on="ON" for="s{{$perm->id}}"></label>
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
            </div>
        @endforeach

    </div>

</section>
@stop


@section('javascripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/js/select2.min.js"></script>

    <script>
        $("#category").select2({tags: true});


        $(document).ready(function(){


            $('.permission').on('change', function(){
                var role_id = $(this).attr('data-role-id');
                var perm_id = $(this).attr('data-perm-id');
                var allow = this.checked ? 1 : 0;
                var checkbox = this;

                $.ajax({
                    url: "/admin/ajax/roles/perm",
                    data: "role_id="+role_id+"&perm_id="+perm_id+"&allow="+allow  ,
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


            $('.category').on('change', function(){
                var role_id = $(this).attr('data-role-id');
                var category = $(this).attr('data-category2');
                var allow = this.checked ? 1 : 0;
                var checkbox = this;
                console.log(this);
                $.ajax({
                    url: "/admin/ajax/roles/category",
                    data: "role_id="+role_id+"&category="+category+"&allow="+allow  ,
                    method: "POST",
                    dataType: "json",
                    success: function(response){
                        new PNotify({
                            title: "ОК",
                            text: "Права доступа обновлены",
                            addclass: "stack-topleft",
                            type: 'success',
                            delay: 2000
                        })
                        $('[data-category="'+category+'"]').each(function(n, el){
                            el.checked = allow;
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
        });

    </script>
@stop