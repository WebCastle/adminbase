@extends('admin')

@section('styles')
    {!! Minify::stylesheet('/admin/assets/admin-tools/admin-forms/css/admin-forms.css') !!}
@stop

@section('top_tab')
    {!! Breadcrumbs::render('admin_roles_perms', $role) !!}
@stop

@section('content')


<section id="content" class="table-layout">

    <div 800","fadein"]"="" data-animate="[" class="tray tray-center pv40 ph30 va-t posr animated-long">
        <div class="mw1100 center-block">
            <h2 class="lh30 mt10 text-center">
                Права роли {{ $role->display_name }}
            </h2>
            <div class="admin-form theme-primary">
                <div id="p1" class="panel heading-border panel-primary">
                    <div class="panel-body bg-light">

                        <form method="post" action="" id="form-ui">

                            @foreach($permissionsGroups as $group)
                            <!-- end .section row section -->
                            <div class="section-divider mt40 mb25" id="spy5">
                                <span>{{ $group['title'] }}</span>
                            </div>

                            <div class="section row">
                                @foreach($group['perms'] as $perm)
                                <div class="col-xs-6 col-md-3">
                                    <label class="switch block mt15">
                                        <input type="checkbox" name="features"   value="javascript">
                                        <label for="f1" data-on="ON" data-off="OFF"></label>
                                        <span>{{ $perm->display_name }}</span>
                                    </label>
                                </div>
                                @endforeach

                            </div>
                            @endforeach
                            <!-- end .section row section -->
                            <!-- .section-divider -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@stop