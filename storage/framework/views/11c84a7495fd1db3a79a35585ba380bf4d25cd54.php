<?php $__env->startSection('content'); ?>
  	<!-- Hero section -->
  	<section class="hero-section">
  		<div class="hero-slider owl-carousel">
        <?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  			<div class="hs-item set-bg" data-setbg="<?php echo e(asset( $val->gambar)); ?>">
  				<div class="container">
  					<div class="row">
  						<div class="col-xl-6 col-lg-7 text-white">
  							<span>New Arrivals</span>
  							<h2>Sport Car</h2>
  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
  							<a href="#" class="site-btn sb-line">DISCOVER</a>
  							<a href="<?php echo e(url('add-to-cart/'.$val->id)); ?>" class="site-btn sb-white">ADD TO CART</a>
  						</div>
  					</div>
  				</div>
  			</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		</div>
  		<div class="container">
  			<div class="slide-num-holder" id="snh-1"></div>
  		</div>
  	</section>
  	<!-- Hero section end -->

  	<!-- letest product section -->
  	<section class="top-letest-product-section">
  		<div class="container">
  			<div class="section-title">
  				<h2>LATEST PRODUCTS</h2>
  			</div>
			<?php $no=0; ?>
  			<div class="product-slider owl-carousel">
          		<?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<div class="product-item">
    					<div class="pi-pic">
							<?php if($no == 0): ?>
								<div class="tag-new">New</div>
							<?php else: ?>
							<?php endif; ?>
                			<a href="<?php echo e(route('mobil.show', $val->id)); ?>"><img src="<?php echo e(asset( $val->gambar )); ?>" alt=""></a>
    						<div class="pi-links">
    							<a href="<?php echo e(url('add-to-cart/'.$val->id)); ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<?php if($val->like($val->id)): ?>
									<a href="<?php echo e(url('unlike/'.$val->id)); ?>" class="wishlist-btn"><i class="fa fa-heart"></i></a>
								<?php else: ?>
									<a href="<?php echo e(url('like/'.$val->id)); ?>" class="wishlist-btn"><i class="fa fa-heart-o"></i></a>
								<?php endif; ?>
    						</div>
    					</div>
    					<div class="pi-text">
    						<h6><a href="<?php echo e(route('mobil.show', $val->id)); ?>">$ <?php echo e(number_format($val->price, 0)); ?></a></h6>
    						<p><a href="<?php echo e(route('mobil.show', $val->id)); ?>"><?php echo e($val->merek->name); ?> <?php echo e($val->type); ?></a></p>
    					</div>
    				</div>
					<?php $no++ ?>
          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  			</div>
  		</div>
  	</section>
  	<!-- letest product section end -->

  	<!-- Product filter section -->
  	<section class="product-filter-section">
  		<div class="container">
  			<div class="section-title">
  				<h2>BROWSE TOP SELLING PRODUCTS</h2>
  			</div>
			<?php $no=0; ?>
  			<div class="row">
          		<?php $__currentLoopData = $mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<div class="col-lg-3 col-sm-6">
    					<div class="product-item">
    						<div class="pi-pic">
								<?php if($no == 0): ?>
								  <div class="tag-new">New</div>
								<?php else: ?>
								<?php endif; ?>
                  				<a href="<?php echo e(route('mobil.show', $val->id)); ?>"><img src="<?php echo e(asset( $val->gambar )); ?>" alt=""></a>
    							<div class="pi-links">
									<a href="<?php echo e(url('add-to-cart/'.$val->id)); ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
									<?php if($val->like($val->id)): ?>
										<a href="<?php echo e(url('unlike/'.$val->id)); ?>" class="wishlist-btn"><i class="fa fa-heart"></i></a>
									<?php else: ?>
										<a href="<?php echo e(url('like/'.$val->id)); ?>" class="wishlist-btn"><i class="fa fa-heart-o"></i></a>
									<?php endif; ?>
    							</div>
    						</div>
    						<div class="pi-text">
                  				<h6><a href="<?php echo e(route('mobil.show', $val->id)); ?>">$ <?php echo e(number_format($val->price, 0)); ?></a></h6>
      							<p><a href="<?php echo e(route('mobil.show', $val->id)); ?>"><?php echo e($val->merek->name); ?> <?php echo e($val->type); ?></a></p>
    						</div>
    					</div>
    				</div>
					<?php $no++ ?>
          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  			</div>
  		</div>
  	</section>
  	<!-- Product filter section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_frontend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM INFORMASI PENJUALAN ONLINE\Toko-Online-Laravel\resources\views/user/index.blade.php ENDPATH**/ ?>