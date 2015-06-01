@extends('admin')

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_roles_view', $role) !!}
@stop

@section('top_tab')
    @include('entrust.roles.top_tab', ['role' => $role])
@stop

@section('content')
<section class="table-layout" id="content">

    <div class="row mt30">
        <div class="col-md-12">
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
                                Роль <strong> {{ $role->name }}</strong>
                            </h2>
                        </div>

                        <ul class="fs15 list-divide-items mb30">
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">ID:</strong>
                                {{ $role->id }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Машинное имя:</strong>
                                {{ $role->name }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Имя:</strong>
                                {{ $role->display_name }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Описание:</strong>
                                {{ $role->description or "Нету" }}
                            </li>
                            <li>
                                @if ($role->perms)
                                    <table class="table mbn tc-list-1 tc-text-muted-2 tc-fw600-2">
                                        <thead>
                                            <tr class=" ">
                                                <th class="w30">Группа</th>
                                                <th>Право</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($role->perms()->orderBy('category')->get() as $perm)
                                                <tr>
                                                    <td>{{ $perm->category }}</td>
                                                    <td>{{ $perm->display_name }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
@stop


@section('javascripts')
@stop