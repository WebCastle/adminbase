<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">

{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="/admin/assets/skin/default_skin/css/theme.css">
<link rel="stylesheet" type="text/css" href="/admin/css/custom.css">

<!-- Favicon -->
<link rel="shortcut icon" href="/admin/assets/img/favicon.ico">

@yield('styles')


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->