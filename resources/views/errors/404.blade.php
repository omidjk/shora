<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>شورای هماهنگی</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Styles -->
    <link href="/css/fonts.css?family=Raleway:300,400,600" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>

<div id="app">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-white shadow-sm">

        <div class="container">

            <nav class="navbar-header navbar-light bg-light justify-content-center">
                <img src="/img/header.png" class="img-responsive img-fluid  mx-auto d-flex" alt="Logo">
            </nav>


        </div>

    </nav>


    <main class="py-4">

        <div class="container ">
            <div align="center"></BR>
                <nav class="navbar navbar-light bg-light justify-content-center">
                    <img src="/img/ad.jpg" class="img-responsive img-fluid  mx-auto d-flex" alt="ad">
                </nav>
                </BR>
                <span><strong><h2> با عرض پوزش شما به این صفحه دسترسی ندارید </h2></strong></span></BR>
                <span> <strong><h2>لطفا با واحد حراست شورای هماهنگی و تبلیغات اسلامی تماس بگیرید</h2></strong></span></Br>


                <div align="center">
                </div>

    </main>

</div>
@stack('scripts')
<footer class="main-footer">

    <div align="center">
        <strong>تمامی حقوق این سامانه برای <a href="http://www.ccoip.ir">شورای هماهنگی تبلیغات اسلامی</a> محفوظ است .
            &copy; 2019</strong>
    </div>
</footer>
</body>

</html>