
<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="alert alert-danger" >

          <?php echo e($error); ?>

  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('success')): ?>

<script type="text/javascript">
    swal({

        text:"<?php echo e(Session::get('success')); ?>",
        timer:6900,
        type:'success'
    })
    setTimeout(function () { 
      location.reload();
    }, 2600);
    

</script>
<?php endif; ?>

<?php if(session('danger')): ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center;" >

    <strong class="fas fa-exclamation-triangle">&nbsp; <?php echo e(session('danger')); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
      <span aria-hidden="true"><b>&times;</b></span>
    </button>
  </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecom\resources\views/messages/message.blade.php ENDPATH**/ ?>