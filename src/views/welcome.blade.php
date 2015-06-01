@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}
@stop

@section('top_tab')
    {!! Breadcrumbs::render('home') !!}
@stop

@section('content')
    <section id="content" class="animated fadeIn" data-page="admin-main">
        Контент главной страници
    </section>
@stop
