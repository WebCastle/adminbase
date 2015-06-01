<!DOCTYPE html>
<html>
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>Admin UaConcept</title>

        <!-- Font CSS (Via CDN) -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300" type="text/css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="/admin/assets/skin/default_skin/css/theme.css" type="text/css" rel="stylesheet">

        <!-- Admin Forms CSS -->
        <link href="/admin/assets/admin-tools/admin-forms/css/admin-forms.css" type="text/css" rel="stylesheet">

        <!-- Favicon -->
        <link href="/admin/assets/img/favicon.ico" rel="shortcut icon">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css"></style>
    </head>

    <body class="external-page sb-l-c sb-r-c onload-check">

        <!-- Start: Main -->
        <div class="animated fadeIn" id="main">

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- begin canvas animation bg -->
                <div id="canvas-wrapper">
                    <canvas id="demo-canvas" width="2560" height="685"></canvas>
                </div>

                <!-- Begin: Content -->
                <section id="content">

                    <div id="login1" class="admin-form theme-info">

                        <div class="row mb15 table-layout">

                            <div class="col-xs-6 va-m pln">
                                <a href="{{route('admin_login')}}">
                                    <img class="img-responsive w250" title="AdminDesigns Logo" src="/admin/assets/img/logos/logo_white.png">
                                </a>
                            </div>

                            <div class="col-xs-6 va-m pln">

                            </div>



                        </div>

                        <div class="panel panel-info mt10 br-n">

                            <div class="panel-heading heading-border bg-white">
                                <span class="panel-title hidden"><i class="fa fa-sign-in"></i>Вход</span>
                                <div class="section row mn">



                                </div>
                            </div>

                            <!-- end .form-header section -->
                            <form id="contact2" action="/admin/login" method="post">
                                <div class="panel-body bg-light p30">
                                    @if($errors->any())
                                        <div class="alert alert-danger alert-dismissable">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                            <i class="fa fa-remove pr10"></i>
                                            <strong>Ой!</strong> {{$errors->first()}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-7 pr30">

                                            <div class="section row hidden">
                                                <div class="col-md-4">
                                                    <a class="button btn-social facebook span-left mr5 btn-block" href="#">
                                                    <span><i class="fa fa-facebook"></i>
                                                    </span>Facebook</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="button btn-social twitter span-left mr5 btn-block" href="#">
                                                    <span><i class="fa fa-twitter"></i>
                                                    </span>Twitter</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="button btn-social googleplus span-left btn-block" href="#">
                                                    <span><i class="fa fa-google-plus"></i>
                                                    </span>Google+</a>
                                                </div>
                                            </div>

                                            <div class="section">
                                                <label class="field-label text-muted fs18 mb10" for="username">Email</label>
                                                <label class="field prepend-icon" for="username">
                                                    <input type="text" placeholder="Введите email" class="gui-input" id="email" name="email">
                                                    <label class="field-icon" for="email"><i class="fa fa-user"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <!-- end section -->

                                            <div class="section">
                                                <label class="field-label text-muted fs18 mb10" for="username">Пароль</label>
                                                <label class="field prepend-icon" for="password">
                                                    <input type="password" placeholder="Введите пароль" class="gui-input" id="password" name="password">
                                                    <label class="field-icon" for="password"><i class="fa fa-lock"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <!-- end section -->
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </div>
                                        <div class="col-sm-5 br-l br-grey pl30">
                                            <h3 class="mb25"> Для входа в админ панель:</h3>
                                            <p class="mb15">
                                                <span class="fa fa-check text-success pr5"></span> Введите Ваш email</p>
                                            <p class="mb15">
                                                <span class="fa fa-check text-success pr5"></span> Введите Ваш пароль</p>
                                            <p class="mb15">
                                                <span class="fa fa-check text-success pr5"></span> Наджмите кнопку "Войти"</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end .form-body section -->
                                <div class="panel-footer clearfix p10 ph15">
                                    <button class="button btn-primary mr10 pull-right" type="submit">Войти</button>
                                    <label class="switch block switch-primary pull-left input-align mt10">
                                        <input type="checkbox" checked="" id="remember" name="remember">
                                        <label data-off="Нет" data-on="ДА" for="remember"></label>
                                        <span>Запомнить меня</span>
                                    </label>
                                </div>
                                <!-- end .form-footer section -->
                            </form>
                        </div>
                    </div>

                </section>
                <!-- End: Content -->

            </section>
            <!-- End: Content-Wrapper -->

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script src="/admin/vendor/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="/admin/vendor/jquery/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="/admin/assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>

        <!-- Page Plugins -->
        <script src="/admin/assets/js/pages/login/EasePack.min.js" type="text/javascript"></script>
        <script src="/admin/assets/js/pages/login/rAF.js" type="text/javascript"></script>
        <script src="/admin/assets/js/pages/login/TweenLite.min.js" type="text/javascript"></script>
        <script src="/admin/assets/js/pages/login/login.js" type="text/javascript"></script>

        <!-- Theme Javascript -->
        <script src="/admin/assets/js/utility/utility.js" type="text/javascript"></script>
        <script src="/admin/assets/js/main.js" type="text/javascript"></script>
        <script src="/admin/assets/js/demo.js" type="text/javascript"></script>

        <!-- Page Javascript -->
        <script type="text/javascript">
            jQuery(document).ready(function() {

                "use strict";

                // Init Theme Core
                Core.init();

                // Init Demo JS
                Demo.init();

                // Init CanvasBG and pass target starting location
                CanvasBG.init({
                    Loc: {
                        x: window.innerWidth / 2,
                        y: window.innerHeight / 3.3
                    }
                });


            });
        </script>

        <!-- END: PAGE SCRIPTS -->




        <div class="jvectormap-label"></div></body></html>