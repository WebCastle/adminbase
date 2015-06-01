@extends('admin')

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_perms_view', $permission) !!}
@stop

@section('top_tab')
    @include('entrust.perms.top_tab', ['permission' => $permission])
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
                                Permission <strong> {{ $permission->name }}</strong>
                            </h2>
                        </div>

                        <ul class="fs15 list-divide-items mb30">
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">ID:</strong>
                                {{ $permission->id }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Машинное имя:</strong>
                                {{ $permission->name }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Имя:</strong>
                                {{ $permission->display_name }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Категория:</strong>
                                {{ $permission->category or "Нету" }}
                            </li>
                            <li>
                                <i class="fa fa-question-circle text-info fa-lg pr10"></i>
                                <strong class="text-dark">Описание:</strong>
                                {{ $permission->description or "Нету" }}
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