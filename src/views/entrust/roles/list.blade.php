@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}
<!-- Datatables CSS -->
<link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

<!-- Datatables Editor CSS -->
<link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css">
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_roles') !!}
@stop

@section('top_tab')
    @include('entrust.top_tab')
@stop

@section('content')
<section class="table-layout" id="content">

<!-- begin: .tray-center -->
<div class="tray tray-center p25 va-t posr">


<!-- recent orders table -->
<div class="panel">

    <div class="panel-body pn">
        <table class="table admin-form theme-warning tc-checkbox-1 fs13" id="userlist-table">
            <thead>
                <tr class="bg-light">
                    <th class="">ID</th>
                    <th class="">Машинное имя</th>
                    <th class="">Имя</th>
                    <th class="">Описание</th>
                    <th class="">#</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

</div>
<!-- end: .tray-center -->

<!-- begin: .tray-right -->
<aside data-tray-height="match" class="tray tray-right tray290 va-t pn" style="height: 1100px;">

    <!-- menu quick links -->
    <div class="p20 admin-form">

        <h4 class="mt5 text-muted fw500">Параметры фильтрации</h4>

        <hr class="short">

        <div class="section mb15">
            <label class="field prepend-icon" for="order-id">
                <input type="text" placeholder="ID" class="gui-input" id="id" name="id">
                <label class="field-icon" for="id"><i class="fa fa-tag"></i>
                </label>
            </label>
        </div>

        <div class="section mb15">
            <label class="field prepend-icon" for="order-id">
                <input type="text" placeholder="Имя" class="gui-input" id="name" name="name">
                <label class="field-icon" for="name"><i class="fa fa-tag"></i>
                </label>
            </label>
        </div>

        <div class="section mb15">
            <label class="field prepend-icon" for="order-id">
                <input type="text" placeholder="Машинное имя" class="gui-input" id="machine_name" name="machine_name">
                <label class="field-icon" for="name"><i class="fa fa-tag"></i>
                </label>
            </label>
        </div>

        <hr class="short">

        <div class="section row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-default btn-sm ph25" id="btn-filter">Поиск</button>
            </div>
        </div>

    </div>

</aside>
<!-- end: .tray-right -->

</section>
@stop


@section('javascripts')
<script type="text/javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="/admin/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

<script type="text/javascript" src="/admin/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

<script>
$(document).ready(function() {
    var table = $('#userlist-table').dataTable( {

        "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
        "bProcessing": true,

        "bServerSide": true,
        "ajax": {
            "url": "/admin/ajax/routes/list",
            "data": function ( data ) {
                data.title = $("#title").val();
                data.search_name = $("#name").val();
                data.search_machine_name = $("#machine_name").val();
                data.search_id = $("#id").val();
            }
        },

        "sServerMethod": "POST",
        "iDisplayLength": 10,

        "bFilter": false,
        "bInfo": true,
        "bSort": true,

        "language": {
            "url": "/admin/vendor/plugins/datatables/extensions/Plugins/i18n/Russian.lang"
        },

        "columnDefs": [
            {
                "targets": [ 4 ],
                "orderable": false,
                "seachable": false
            }
        ]
    } ) ;

    $("#btn-filter").on('click', function(){
        table.fnDraw();
    })

} );
</script>
@stop