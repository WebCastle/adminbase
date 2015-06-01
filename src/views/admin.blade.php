<!DOCTYPE html>
<html>

    <head>
        @include('blocks.head')
    </head>

<body>

    <!-- Start: Main -->
    <div id="main">
        <input type="hidden" name="app_token" ids="app_token" value="{{ csrf_token() }}"/>
        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            @include('blocks.header')
        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            @include('blocks.left-menu')
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Breadcrumbs -->
            <header id="breadcrumbs">
                <div class="topbar-left">
                    @yield('breadcrumbs')
                </div>
            </header>
            <!-- End: Breadcrumbs -->

            <!-- Start: TopTab -->
            <header class="ph10" id="top-tab">
                @yield('top_tab')
            </header>
            <!-- End: TopTab -->

            @if($flash->exists())
                <div class="container">
                    @if($flash->isPanel())
                    <div class="panel">
                        <h5>{{ $flash->title }}</h5>
                        <p>{{ $flash->message }}</p>
                    </div>
                    @else

                    <div class="alert alert-{{ $flash->type }} alert-dismissable alert-custom">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{ $flash->message }}
                    </div>
                    @endif
                </div>

            @endif
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            @yield('content')
            <!-- End: Content -->

        </section>


    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->
    @include('blocks.bottom-scripts')
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
