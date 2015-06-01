@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/css/select2.min.css" rel="stylesheet" />

@stop

@section('top_tab')
    {!! Breadcrumbs::render('admin_users_create') !!}
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_users_create') !!}
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
                        <div class="col-md-12">
                            <h2 class="fw200 mb20 mt10">
                                Создание пользователя
                            </h2>
                        </div>
                        {!! form($form) !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
@stop


@section('javascripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/js/select2.min.js"></script>
    <script>
        $("#category").select2({tags: true})
    </script>
@stop