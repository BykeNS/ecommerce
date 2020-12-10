<?php $__env->startSection('title','CART'); ?>

<?php $__env->startSection('content'); ?>
<section class="jumbotron text-left" id="jumbo">
    <div class="container">
        <h2 class="jumbotron-heading"><b>TEASHOP CART</b></h2>
     </div>
</section>
<?php if(Cart::content()->count() > 0 ): ?>
<div class="container mb-4">
    <div class="row">
        <div class="col-12 m-3">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-left">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-right">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><img src="<?php echo e(url($item->options->image)); ?>" width="50px;" height="50px;"></td>
                            <td><?php echo e($item->name); ?></td>
                            <td>In stock</td>
                            <td scope="col">
                             <form method="post" action="<?php echo e(url('cart/update',$item->rowId)); ?>">
                                    <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($item->id); ?>" name="id" >
                                <input type="hidden" value="<?php echo e($item->name); ?>" name="name" >
                                <input type="number" value="<?php echo e($item->qty); ?>" autocomplete="off" name="qty" class="entry value" min="1" max="5">
                                &nbsp;
                                <input type="submit" name="submit" value="Update" class="btn btn-info" >
                             </form>
                            </td>
                            <td class="text-right"><?php echo e(number_format($item->price,2)); ?></td>
                            <td class="text-right"><a href="<?php echo e(url('remove-cart/'.$item->rowId)); ?>" onclick="return confirm('Are you sure you want to delete this item?');" <button class="btn btn-danger btn-md" > <i class="fas fa-trash"></i> </button></a> </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right"><?php echo e(Cart::subtotal()); ?> €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tax</td>
                            <td class="text-right" ><?php echo e(Cart::tax()); ?> €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?php echo e(Cart::total()); ?> €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6 ml-8">
                    <a href="<?php echo e(url('/')); ?>" <button class="btn btn-warning text-center" >&larr; Continue Shopping</button></a>
                </div>
                
                <div class=" col-md-6 ">
                <form action="<?php echo e(url('charge')); ?>" method="post" style="text-align: right; margin: 31px 20px 31px 31px;">
                    <?php echo csrf_field(); ?>
                 <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_51D0pyOK4ThPYMLi4DiTMiGbstPBPhpzxu5MIIYWWQBSWHbiBc9T25B3QBmnYlWLyuOAK8Q0ahfxyOEpGybPKv1NO00dOP4jxAw"
                   data-amount=" <?php echo e(floatval( str_replace(',', '',Cart::total())*100)); ?>"
                   data-name="TeaShop"
                   data-description="Safe Payment"
                   data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                   data-locale="auto"
                   data-currency="eur">
                 </script>

               </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php else: ?>
<h4 class="text-center m-4">Your cart is empty</h4>
<div class=" col-md-4 mb-3 text-center">
   <a href="<?php echo e(url('/')); ?>" <button class="btn btn-warning text-center" >&larr; Go back Shopping</button></a>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/frontend/pages/cart.blade.php ENDPATH**/ ?>