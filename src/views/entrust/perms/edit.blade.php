@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/css/select2.min.css" rel="stylesheet" />

@stop

@section('top_tab')
    @include('entrust.perms.top_tab', ['permission' => $permission])
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_perms_edit', $permission) !!}
@stop

@section('content')
    <section id="content" class="table-layout">
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
                                    Редактирование права доступа
                                </h2>
                            </div>


                            {!! form_start($form) !!}
                            <div class="form-group">
                                <label class="control-label" for="display_name">Машинное имя</label>
                                <p class="form-control-static text-muted">{{ $permission->name }}</p>
                            </div>
                            {!! form_row($form->display_name) !!}
                            {!! form_row($form->category) !!}
                            {!! form_row($form->description) !!}
                            {!! form_rest($form) !!}

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