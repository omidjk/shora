<!doctype html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<html lang="fa">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>شورای هماهنگی تبلیغات اسلامی</title>
    <!-- Styles -->
	<link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ menu_asset('/css/menu.css') }}" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
    <link  href="{{ asset('/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Google Font: Source Sans Pro -->
  	<link href="/css/fonts.css" rel="stylesheet" />
    <!-- bootstrap rtl -->
    <link href="{{ asset('/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- template rtl version -->
    <link href="{{ asset('/css/custom-style.css') }}"  rel="stylesheet" type="text/css" />
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
        <a href="http://hefa.ccoip.ir" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">تماس</a>
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
  <!-- /.navbar -->
	
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/img/209265408.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a  class="d-block">نام کاربر : {{ Auth::user()->name }} <span class="caret"></span></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item has-treeview">
             {{ menu('menu') }}
           </li>
		   <li class="nav-item">

			  <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 {{ ('خروج') }}
               </a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
	<nav class="navbar-header navbar-light bg-light justify-content-center">
     
          <img  src="/img/header.png"  class="img-responsive img-fluid  mx-auto d-flex" alt="Logo">
   
    </nav> 

        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>سیستم ارسال پیام</h5>
      <p>عنوان پیام</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
 
  <div align="center">
    <strong>تمامی حقوق این سامانه برای <a href="http://www.ccoip.ir">شورای هماهنگی تبلیغات اسلامی</a> محفوظ است . &copy; 2019</strong>
  </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    <!-- Menu Js -->
  <script src="{{ menu_asset('/js/app.js') }}"></script>
  <script src="{{ menu_asset('/js/menu.js') }}"></script>
    <!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}" ></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/adminlte.min.js') }}" ></script>


</body>
</html>
