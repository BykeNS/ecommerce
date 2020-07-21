<?php $__env->startSection('title','Edit'); ?>
<?php $__env->startSection('content'); ?>
<div class="main-footer">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<h1>Edit <?php echo e($product->name); ?></h1>

<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
    <form role="form" method="post" action="<?php echo e(url('/admin/product/update/'.$product->slug)); ?>" enctype="multipart/form-data" data-parsley-validate="">
        <?php echo csrf_field(); ?>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Product Name:</label>
              <input type="text" id="inputName" class="form-control" value="<?php echo e($product->name); ?>" name="name">
            </div>
            <div class="form-group">
              <label for="inputDescription">Project Description:</label>
              <textarea id="inputDescription" class="form-control" rows="6" name="description"><?php echo e($product->description); ?></textarea>
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
              <label for="inputClientCompany">Price:</label>
              <input type="number" id="price" class="form-control" value="<?php echo e($product->price); ?>" name="price">
            </div>
            <div class="form-group">
              <label for="inputProjectLeader">Product Images:</label><br>
              <?php $__currentLoopData = explode(',' ,$product->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($loop->first): ?>
              <img src="<?php echo e(asset('/images/'.$image)); ?>" class="img-thumbnail" style="width: 85px; height: 85px;">
              <?php endif; ?>
              <?php if($loop->index): ?>
              <img src="<?php echo e(asset('/images/'.$image)); ?>" class="img-thumbnail" style="width: 85px; height: 85px;margin-left:24px;">
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="form-group"><br>
                <label for="exampleInputFile">Add Images:<small> (You can select more than one)</small></label>
                <div class="input-group">
                    <input type="file" name="image[]"  class="custom-file-input" data-parsley-max-file-size="3548" id="image" multiple >
                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- /.card-body -->
        </div>
        <div class="row">
            <div class="col-12">
              <input type="submit" value="Save Changes" class="btn btn-primary ">
            </div>
          </div>
          <form>
        <!-- /.card -->
      </div>
    </div>
  </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/admin/pages/edit.blade.php ENDPATH**/ ?>