<?php $__env->startSection('title','Create'); ?>
<?php $__env->startSection('content'); ?>

	<div class="main-footer">
        <div class="col-md-2 offset-md-10 pb-2">
            <a href="<?php echo e(url('admin/category/create')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Category</a>
          </div>
          <?php if($categories->count() == 0 ): ?>
        <div class="alert alert-warning">
          <strong>Hey!!!</strong> No Category Found.
      </div>
     <?php elseif($categories): ?>

        <h3>All categories:</h3>

        <section class="content">
            <div class="col-xs-12">
               <table class="table table-hover">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th style="width: 20px;">Actions</th>
                            <th style="width: 20px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($category->id); ?>.</td>
                            <td><?php echo e($category->name); ?></td>
                            <td><?php echo e($category->status == 1 ? "Published" : "Unpublished"); ?></div></td>
                            <td >
                                <a href="" class="btn btn-primary btn-md"><span class="fas fa-pencil-alt"></span></a>
                            </td>
                            <td >
                                <a href="" class="btn btn-danger btn-md" onclick="return confirm('Are you sure you want to delete ');"><span class="fas fa-trash"></span></a>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php endif; ?>

            </div>
            </div>


        </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/admin/category/index.blade.php ENDPATH**/ ?>