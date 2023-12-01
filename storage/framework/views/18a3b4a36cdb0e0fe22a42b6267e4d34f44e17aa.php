<!-- Header section -->
<header class="header-section">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-5">
          <form class="header-search-form">
            <input type="text" placeholder="Search on shop ....">
            <button><i class="flaticon-search"></i></button>
          </form>
        </div>
        <div class="col-lg-2 text-center"></div>
        <div class="col-xl-4 col-lg-5">
          <div class="user-panel">
            <div class="up-item">
              <?php if(Auth::user()): ?>
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span><?php echo e(count((array) session('cart'))); ?></span>
                </div>
                <a href="<?php echo e(route('cart')); ?>">Shopping Cart</a>
              <?php endif; ?>
            </div>
            <div class="up-item ml-4">
              <i class="flaticon-profile"></i>
              <a href="<?php echo e(route('profil', Auth::user()->id)); ?>">Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="main-navbar">
    <div class="container">
      <!-- menu -->
      <ul class="main-menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">Brand</a>
          <ul class="sub-menu">
            <?php $__currentLoopData = $merek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('category', $data->id)); ?>"><?php echo e($data->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <li><a href="<?php echo e(route('history')); ?>">History</a>
        <li><a href="<?php echo e(route('favorite')); ?>">Daftar Suka</a>
      </ul>
    </div>
  </nav>
</header>
<!-- Header section end -->
<?php /**PATH C:\xampp\htdocs\SISTEM INFORMASI PENJUALAN ONLINE\Toko-Online-Laravel\resources\views/template_frontend/navbar.blade.php ENDPATH**/ ?>