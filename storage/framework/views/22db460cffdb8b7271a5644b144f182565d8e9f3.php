<?php $__env->startSection('title', $category_name->name); ?>

<?php $__env->startSection('content'); ?>
<?php if($category_name): ?> 
<div class="banner_inner ">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="/">Home</a>
                    <i>|</i>
                </li>
                <li><?php echo e($category_name->name); ?></li>
            </ul>
        </div>
    </div>
<?php endif; ?>
</div><br><br>
  
<div class="page-head">
  <div class="container">
    <?php if(count($products) == 0): ?>
    <div class="alert alert-info text-center">
        <strong>Hey...</strong> No Product in  <?php echo e($category_name->name); ?> category !!!.
    </div>
    <?php else: ?>
    <h4 class="text-center mb-5">Total product <span class="badge badge-primary"><?php echo e(count($products)); ?></span></h4>
    <?php endif; ?>  
      <div class="row">
               
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 product-men women_two" id="shop">

            <div class="product-googles-info googles">
                <div class="men-pro-item">
                    <?php $__currentLoopData = explode(',' ,$product->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->first): ?>
                    <div class="men-thumb-item">
                        <img src="<?php echo e(asset('images/'.$image)); ?>" class="img-fluid" alt=""  lazy="loading">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="<?php echo e(url('/product/'.$product->slug)); ?>" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="item-info-product">
                        <div class="info-product-price">
                            <div class="grid_meta">
                                <div class="product_price"><br>
                                    <h4>
                                        <a href="<?php echo e(url('/product/'.$product->slug)); ?>"><?php echo e($product->name); ?></a>
                                    </h4>
                                    <div class="grid-price mt-2">
                                        <span class="money ">$<?php echo e($product->formatPrice()); ?></span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="googles single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="googles_item" value="Farenheit">
                                    <input type="hidden" name="amount" value="575.00">
                                    <button type="submit" class="googles-cart pgoogles-cart">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
             </div>
            <br>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>   
  </div>
</div>
 
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/frontend/pages/category.blade.php ENDPATH**/ ?>