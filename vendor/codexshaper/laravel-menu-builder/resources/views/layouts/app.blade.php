<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>شورای هماهنگی تبلیغات اسلامی</title>
    <!-- Fonts -->

  
    <link rel="stylesheet" type="text/css" href="/css/fonts.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href=""{{ asset('/css/font-awesome.min.css') }}"  rel="stylesheet" type="text/css" />
    <!-- Styles -->
    <link href="{{ menu_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ menu_asset('css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ menu_asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ menu_asset('css/style.css') }}" rel="stylesheet">
    <link  href="{{ asset('/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition sidebar-mini">
<div id="app" class="wrapper">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

        <!-- Right navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">خانه</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">تماس با ما</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="ml-3 my-auto d-inline w-100">
            <div class="input-group input-group-sm ">
                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

    </nav>
    <div class="content-wrapper">

        <nav class="navbar-header navbar-light bg-light justify-content-center">

            <img  src="/img/header.png"  class="img-responsive img-fluid  mx-auto d-flex" alt="Logo">

        </nav>

        <main class="main-menu">
            @yield('content')
        </main>
    </div>



</div>
<footer class="main-footer">

    <div align="center">
        <strong>تمامی حقوق این سامانه برای <a href="http://www.ccoip.ir">شورای هماهنگی تبلیغات اسلامی</a> محفوظ است . &copy; 2019</strong>
    </div>
</footer>
<!-- Scripts -->
<script src="{{ menu_asset('js/app.js') }}" ></script>
<script src="{{ menu_asset('js/bootstrap-material-design.min.js') }}" ></script>
<script src="{{ menu_asset('js/menu.js') }}" ></script>
<script src="{{ asset('/js/adminlte.min.js') }}" ></script>
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>


</body>
</html>
