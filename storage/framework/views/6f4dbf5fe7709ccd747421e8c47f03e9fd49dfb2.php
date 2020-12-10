<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="<?php echo e(asset('frontend/css/style.css')); ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo e(asset('frontend/css/fontawesome-all.css')); ?>" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
		rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/flexslider.css')); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/jquery-ui1.css')); ?>">
	<link href="<?php echo e(asset('frontend/css/easy-responsive-tabs.css')); ?>" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/adminlte.min.css')); ?>">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class=" logo-w3layouts text-center">
        <h1 class="logo-w3layouts">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                TEASHOP </a>
        </h1>
    </div>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
</div>


<script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/dist/js/adminlte.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>


<?php /**PATH C:\laragon\www\ecom\resources\views/layouts/app.blade.php ENDPATH**/ ?>