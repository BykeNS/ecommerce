<!DOCTYPE html>
<html>
<?php echo $__env->make('admin.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<title>AdminLTE 3 | <?php echo $__env->yieldContent('title'); ?></title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
 <?php echo $__env->make('admin.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

  
 <?php echo $__env->make('admin.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
<div class="col-md-8 offset-3 text-center ">
<?php echo $__env->make('messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
 <?php echo $__env->yieldContent('content'); ?>

  
 <?php echo $__env->make('admin.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
 <?php echo $__env->make('admin.include.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</div>



<?php echo $__env->make('admin.include.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\ecom\resources\views/admin/master.blade.php ENDPATH**/ ?>