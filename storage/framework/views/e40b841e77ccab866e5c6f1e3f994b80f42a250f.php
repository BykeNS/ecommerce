<?php $__env->startSection('title','Create'); ?>
<?php $__env->startSection('content'); ?>

	<div class="main-footer">

        <h3>Create New Category</h3>
        <form role="form" method="post" action="<?php echo e(url('/admin/category/store')); ?>" enctype="multipart/form-data" data-parsley-validate="">
            <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Category Name:</label>
                <input type="text" class="form-control" id="" name="name" value="<?php echo e(old('name')); ?>" required data-parsley-length="[5,100]">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Status:</label>
                    <select name="status" class="form-control" required aria-required="true">

                    <option value="1"selected='selected'>Published</option>
                    <option value="0">Un Published</option>
                 </select>
             </div>
            </div>
            <div class="card-body">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/admin/category/create.blade.php ENDPATH**/ ?>