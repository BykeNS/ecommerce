<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="btn btn-default"  href="<?php echo e(route('logout')); ?>"

        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-user fa-fw " aria-hidden="true"></i>
         <?php echo e(__('Logout')); ?>

     </a>

     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
         <?php echo csrf_field(); ?>
     </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
<?php /**PATH C:\laragon\www\ecom\resources\views/admin/include/nav.blade.php ENDPATH**/ ?>