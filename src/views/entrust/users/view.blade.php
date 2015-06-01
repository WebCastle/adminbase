@extends('admin')

@section('top_tab')
    @include('entrust.users.top_tab', ['user' => $user])
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_users_view', $user) !!}
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
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="fw200 mb20 mt10">
                                    Пользователь <strong> {{ $user->name }}</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="fs15 list-divide-items mb30">
                                    <li>
                                        <a title="" href="#" class="link-unstyled">
                                            <i class="fa fa-question-circle text-info fa-lg pr10"></i> <strong>ID:</strong> {{$user->id}}
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="#" class="link-unstyled">
                                            <i class="fa fa-question-circle text-info fa-lg pr10"></i> <strong>Имя:</strong> {{$user->name}}
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="#" class="link-unstyled">
                                            <i class="fa fa-question-circle text-info fa-lg pr10"></i> <strong>Email:</strong> {{$user->email}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
@stop


@section('javascripts')
@stop