<html lang="<?php echo e(app()->getLocale()); ?>">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>شورای هماهنگی</title>

    <!-- Scripts -->

  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link href="<?php echo e(asset('/css/bootstrap-rtl.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/plugins/font-awesome/css/font-awesome.min.css')); ?>"  rel="stylesheet" type="text/css" />
	<!-- Styles -->
    <link href="/css/fonts.css?family=Raleway:300,400,600" rel="stylesheet" />

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>

<div id="app">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-white shadow-sm">

        <div class="container">

            <nav class="navbar-header navbar-light bg-light justify-content-center">
                <img  src="/img/header.png"  class="img-responsive img-fluid  mx-auto d-flex" alt="Logo">
            </nav>

        </div>

    </nav>


    <main class="py-4">

        <div class="container">

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </main>

</div>
<?php echo $__env->yieldPushContent('scripts'); ?>
<footer class="main-footer">

    <div align="center">
        <strong>تمامی حقوق این سامانه برای <a href="http://www.ccoip.ir">شورای هماهنگی تبلیغات اسلامی</a> محفوظ است . &copy; 2019</strong>
    </div>
</footer>
</body>

</html><?php /**PATH D:\PhpstormProjects\shora\resources\views/layouts/app.blade.php ENDPATH**/ ?>