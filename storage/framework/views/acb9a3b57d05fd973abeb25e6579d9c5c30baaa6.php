<?php $__env->startSection('content'); ?>
  <!-- Page info -->
  <div class="page-top-info">
    <div class="container">
      <h4>Cart</h4>
      <div class="site-pagination">
        <a href="<?php echo e(route('home')); ?>">Home</a> /
        <a href="#">Cart</a>
      </div>
    </div>
  </div>
  <!-- Page info end -->


  <!-- cart section end -->
  <section class="cart-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php
           $total = 0;
          ?>
          <?php if(session('cart')): ?>
          <div class="cart-table">
            <h3>Your Cart</h3>
            <div class="cart-table-warp">
              <table>
                <thead>
                  <tr>
                    <th class="product-th">Product</th>
                    <th class="quy-th">Quantity</th>
                    <th class="size-th">Brand</th>
                    <th class="total-th">Price</th>
                    <th class="total-th">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="product-col">
                      <img src="<?php echo e($details['photo']); ?>" alt="">
                      <div class="pc-title">
                        <h4><?php echo e($details['name']); ?></h4>
                        <p>$ <?php echo e(number_format($details['price'], 0)); ?></p>
                      </div>
                    </td>
                    <td data-th="Quantity" class="quy-col">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" class="new-quantity" value="<?php echo e($details['quantity']); ?>">
                        </div>
                      </div>
                    </td>
                    <td data-th="Brand" class="size-col">
                      <h4><?php echo e($details['brand']); ?></h4>
                    </td>
                    <td data-th="Price" class="total-col">
                      <h4>$ <?php echo e(number_format( $details['price'] * $details['quantity'] , 0)); ?></h4>
                      <?php
                        $total += $details['price'] * $details['quantity'];
                      ?>
                    </td>
                    <?php echo csrf_field(); ?>
                    <td class="actions text-center" data-th="">
                      <button class="btn btn-info btn-sm update_cart-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-refresh"></i></button>
                      <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-trash-o"></i></button>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <div class="total-cost">
              <h6>Total <span>$ <?php echo e(number_format($total, 0)); ?></span></h6>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-4 card-right">
          <?php if(session('cart')): ?>
          <a href="<?php echo e(route('cekout')); ?>" class="site-btn">Proceed to checkout</a>
          <?php endif; ?>
          <a href="<?php echo e(route('home')); ?>" class="site-btn sb-dark">Continue shopping</a>
        </div>
      </div>
    </div>
  </section>
  
	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
      </div>
      <?php $no=0; ?>
			<div class="row">
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-3 col-sm-6">
            <div class="product-item">
              <div class="pi-pic">
                <?php if($no == 0): ?>
                  <div class="tag-new">New</div>
                <?php else: ?>
                <?php endif; ?>
                <img src="<?php echo e(asset( $data->gambar )); ?>" alt="">
                <div class="pi-links">
                  <a href="<?php echo e(url('add-to-cart/'.$data->id)); ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                  <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                </div>
              </div>
              <div class="pi-text">
                <h6>$ <?php echo e(number_format($data->price, 0)); ?></h6>
                <p><?php echo e($data->merek->name); ?> <?php echo e($data->type); ?></p>
              </div>
            </div>
          </div>
          <?php $no++ ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<!-- Related product section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_frontend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM INFORMASI PENJUALAN ONLINE\Toko-Online-Laravel\resources\views/user/cart.blade.php ENDPATH**/ ?>