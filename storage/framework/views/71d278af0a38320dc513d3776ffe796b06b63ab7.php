<?php $__env->startSection('title','SINGLE'); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="/">Home</a>
							<i>|</i>
						</li>
						<li class="text-center"><?php echo e($product->name); ?></li>

					</ul>
				</div>
			</div>
		</div>
	</div>

		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">

			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">

											<ul class="slides">
                                                <?php $__currentLoopData = explode(',' ,$product->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($loop->first): ?>
												<li data-thumb="<?php echo e(asset('images/'.$image)); ?>">
													<div class="thumb-image"> <img src="<?php echo e(asset('images/'.$image)); ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                                </li>
                                               <?php endif; ?>

                                                <?php if($loop->index): ?>
												<li data-thumb="<?php echo e(asset('images/'.$image)); ?>">
													<div class="thumb-image"> <img src="<?php echo e(asset('images/'.$image)); ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                            <div class="clearfix"></div>
										</div>
									</div>
                                </div>

								<div class="col-lg-8 single-right-left simpleCart_shelfItem">

									<h3><?php echo e($product->name); ?></h3>

									<p><span class="item_price">$<?php echo e($product->formatPrice()); ?></span>
										<del>$1,199</del>
									</p>
									<div class="rating1">
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="description">
										<h5><?php echo e($product->description); ?></h5>
										<form action="#" method="post">
												<input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
											<input type="submit" value="Check">
										</form>
									</div>
									<div class="color-quality">
										<div class="color-quality-right">
											<h5>Quality :</h5>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
													<option value="null">1 Qty</option>
													<option value="null">6 Qty</option>
													<option value="null">7 Qty</option>
													<option value="null">10 Qty</option>
												</select>
										</div>
									</div>
									<div class="occasional">
										<h5>Types :</h5>
										<div class="colr ert">
											<label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz Butterfly(Black)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (white)</label>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="<?php echo e(url('cart')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
														<input type="hidden" name="name" value="<?php echo e($product->name); ?>">
														<input type="hidden" name="description" value="<?php echo e($product->description); ?>">
                                                        <input type="hidden" name="price" value="<?php echo e($product->price); ?>">
                                                        <?php $__currentLoopData = explode(',' ,$product->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($loop->first): ?>
                                                            <input type="hidden" name="image" value="<?php echo e(asset('images/'.$image)); ?>">
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <input type="hidden" name="qty" value="<?php echo e($product->quantity); ?>" >
														<button type="submit" class="googles-cart pgoogles-cart">
															Add to Cart
														</button>

													</form>

												</div>
									</div>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>

										</ul>

								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Reviews</li>
											<li>Information</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">

												<div class="single_page">
													<h6>Lorem ipsum dolor sit amet</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
													<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
												</div>
											</div>
											<!--//tab_one-->
											<div class="tab2">

												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="<?php echo e(asset('frontend/images/team1.jpg')); ?>" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
																</ul>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
																	quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
																	autem vel eum iure reprehenderit.</p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>add a review</h4>
															<form action="#" method="post">
																	<input class="form-control" type="text" name="Name" placeholder="Enter your email..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
																<textarea name="Message" required=""></textarea>
																<input type="submit" value="SEND">
															</form>
														</div>
													</div>

												</div>
											</div>
											<div class="tab3">

												<div class="single_page">
													<h6>Irayz Butterfly Sunglasses  (Black)</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
													<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
												</div>
											</div>
										</div>
									</div>
								</div>


					</div>
				</div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<div class="container-fluid">

					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">

                                <?php $__currentLoopData = $interested; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="item ">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">

                                                    <?php $__currentLoopData = explode(',' ,$item->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<div class="men-thumb-item">

                                                        <?php if($loop->first): ?>
														<img src="<?php echo e(asset('images/'.$image)); ?>" class="img-fluid" alt="image" >
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="<?php echo e(url('/product/'.$item->slug)); ?>" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
                                                        <span class="product-new-top">New</span>
                                                        <?php endif; ?>

                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class=" product_price ">
																	<h4 class="ml-2">
																		<a href="<?php echo e(url('/product/'.$item->slug)); ?>"><?php echo e($item->name); ?> </a>
																	</h4>
																	<div class="grid-price ">
																		<span class="money "><?php echo e($item->formatPrice()); ?></span>
																	</div>
																</div>
																<ul class="stars ">
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
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Fastrack Aviator">
																	<input type="hidden" name="amount" value="325.00">
																	<button type="submit" class="googles-cart pgoogles-cart "  style="margin-top: 50px">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>


        </section>
        <?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecom\resources\views/frontend/pages/show.blade.php ENDPATH**/ ?>