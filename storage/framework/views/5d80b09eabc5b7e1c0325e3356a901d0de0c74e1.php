<?php $__env->startSection('title','Thank You'); ?>

<?php $__env->startSection('content'); ?>
<div class="jumbotron text-center">
    <h1 class="display-3">Thanks For Your Purchase!</h1>
    <?php
        Cart::destroy();
    ?>
    <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
    <hr>
    <p>
      Having trouble? <a href="/contact">Contact us</a>
    </p>
    <p class="lead">
        <a href="<?php echo e(url('/')); ?>" <button class="btn btn-warning text-center" >&larr; Go back Shopping</button></a>
    </p>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/frontend/pages/thanks.blade.php ENDPATH**/ ?>