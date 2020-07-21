<?php $__env->startSection('title','Create'); ?>
<?php $__env->startSection('content'); ?>

	<div class="main-footer">

        <h3>Create New Product</h3>
        <form role="form" method="post" action="<?php echo e(url('/admin/product/store')); ?>" enctype="multipart/form-data" data-parsley-validate="">
            <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Poduct Name:</label>
                <input type="text" class="form-control" id="" name="name" value="<?php echo e(old('name')); ?>" required data-parsley-length="[10,25]">
              </div>
              <div class="form-group">
                <label for="">Poduct Description:</label>
                      <textarea class="form-control"  rows="7" name="description" required data-parsley-length="[10,8000]"><?php echo e(old('description')); ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Poduct Price:</label>
                <input type="number" min="5.00" max="10000.00" class="form-control" id="exampleInputEmail1" required='' name="price" value="<?php echo e(old('price')); ?>">
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Product Category:<small> (You can select more than one)</small></label>
                    <select name="category[]" class="form-control selectpicker " required='' multiple >
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
             </div>
              <div class="form-group">
                <label for="exampleInputFile">Product Image:</label>
                <div class="input-group">
                    <input type="file" name="image[]" required="" class="custom-file-input" data-parsley-max-file-size="3548" id="image" multiple >
                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                </div>
              </div>
            </div>
            <div class="card-body">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </form>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/admin/pages/create.blade.php ENDPATH**/ ?>