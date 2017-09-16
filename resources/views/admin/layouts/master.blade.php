<!DOCTYPE html>
<html>
<head>

    <title>Welcome to ESS CMS. The best CMS to our clients. - Copyright 2017 Elemental Studio S.A.C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|Lato:300,400,700,900' rel='stylesheet'
    type='text/css'> -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/checkbox3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/lib/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/css/bootstrap-toggle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/js/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/js/datetimepicker/bootstrap-datetimepicker.min.css')}}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/css/themes/flat-blue.css')}}">

<!--     <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,300italic"> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://ess.pe/vendor/tcg/voyager/assets/images/logo-icon.png" type="image/x-icon">

    <!-- CSS Fonts -->
    <link rel="stylesheet" href="{{asset('static-admin/assets/fonts/voyager/styles.css')}}">
    <script type="text/javascript" src="{{asset('static-admin/assets/lib/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/css/ga-embed.css')}}">

    <!-- Voyager CSS -->
    <link rel="stylesheet" href="{{asset('static-admin/assets/css/voyager.css')}}">

    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .flat-blue .side-menu .navbar-header, .widget .btn-primary, .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:#22A7F0;
            border-color:#22A7F0;
        }
        .breadcrumb a{
            color:#22A7F0;
        }
    </style>
    @yield('css')

</head>

<body class="flat-blue">
    <div id="voyager-loader">
        <img src="{{asset('img/logo-icon.png')}}" alt="Voyager Loader">
    </div>
    <div class="app-container">
        <div class="fadetoblack visible-xs"></div>
        <div class="row content-container">
            @include('admin.layouts.nav')
        </div>
        <div class="container-fluid">
            <div class="side-body padding-top">
                <div class="page-content">
                    <div class="alerts"></div>
                    <div class="clearfix container-fluid row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <div class="site-footer-right">
        Hecho por <a href="#">Elemental Studio S.A.C</a> - v0.1
    </div>
</footer>
<script>
    (function(){
        var appContainer = document.querySelector('.app-container'),
        sidebar = appContainer.querySelector('.side-menu'),
        navbar = appContainer.querySelector('nav.navbar.navbar-top'),
        loader = document.getElementById('voyager-loader'),
        hamburgerMenu = document.querySelector('.hamburger'),
        sidebarTransition = sidebar.style.transition,
        navbarTransition = navbar.style.transition,
        containerTransition = appContainer.style.transition;

        sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition =
        appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition = 
        navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = 'none';

        if (window.localStorage && window.localStorage['voyager.stickySidebar'] == 'false') {
            appContainer.className += ' expanded';
            loader.style.left = (sidebar.clientWidth/2)+'px';
            hamburgerMenu.className += ' is-active';
        }

        navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = navbarTransition;
        sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition = sidebarTransition;
        appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition = containerTransition;
    })();
</script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/lib/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/bootstrap-toggle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/moment-with-locales.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('static-admin/assets/js/helpers.js')}}"></script>
@yield('js')
</body>
</html>