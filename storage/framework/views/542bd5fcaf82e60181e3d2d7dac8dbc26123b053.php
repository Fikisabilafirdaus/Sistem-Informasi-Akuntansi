<?php $__env->startSection('content'); ?>
  	<!-- Product filter section -->
  	<section class="product-filter-section mt-5">
  		<div class="container">
  			<div class="section-title">
  				<h2>FAVORITE PRODUCTS</h2>
  			</div>
  			<div class="row">
          		<?php $__currentLoopData = $like; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<div class="col-lg-3 col-sm-6">
    					<div class="product-item">
    						<div class="pi-pic">
                                <?php if($data->mobil->id == $new->id): ?>
                                    <div class="tag-new">New</div>
                                <?php else: ?>
                                <?php endif; ?>
                  				<a href="<?php echo e(route('mobil.show', $data->mobil->id)); ?>"><img src="<?php echo e(asset( $data->mobil->gambar )); ?>" alt=""></a>
    							<div class="pi-links">
									<a href="<?php echo e(url('add-to-cart/'.$data->mobil->id)); ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
									<?php if($data->mobil->like($data->mobil->id)): ?>
										<a href="<?php echo e(url('unlike/'.$data->mobil->id)); ?>" class="wishlist-btn"><i class="fa fa-heart"></i></a>
									<?php else: ?>
										<a href="<?php echo e(url('like/'.$data->mobil->id)); ?>" class="wishlist-btn"><i class="fa fa-heart-o"></i></a>
									<?php endif; ?>
    							</div>
    						</div>
    						<div class="pi-text">
                  				<h6><a href="<?php echo e(route('mobil.show', $data->mobil->id)); ?>">$ <?php echo e(number_format($data->mobil->price, 0)); ?></a></h6>
      							<p><a href="<?php echo e(route('mobil.show', $data->mobil->id)); ?>"><?php echo e($data->mobil->merek->name); ?> <?php echo e($data->mobil->type); ?></a></p>
    						</div>
    					</div>
    				</div>
          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  			</div>
  		</div>
  	</section>
  	<!-- Product filter section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_frontend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM INFORMASI PENJUALAN ONLINE\Toko-Online-Laravel\resources\views/user/favorite.blade.php ENDPATH**/ ?>