<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Laravel &mdash; CRUD</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('profile/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/linericon/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/owl-carousel/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/lightbox/simpleLightbox.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/nice-select/css/nice-select.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/animate-css/animate.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/popup/magnific-popup.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/vendors/flaticon/flaticon.css')); ?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo e(asset('profile/css/style.css')); ?>">
      	<link rel="stylesheet" href="<?php echo e(asset('user/css/animate.css')); ?>">
      	<link rel="stylesheet" href="<?php echo e(asset('user/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('profile/css/responsive.css')); ?>">
    </head>
    <body>
        <!-- Page Preloder -->
      	<div id="preloder">
      		<div class="loader"></div>
      	</div>

        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
                <?php if($user->gambar): ?>
                  <img src="<?php echo e(asset( $user->gambar )); ?>" width="450" alt="">
                <?php else: ?>
                  <img src="<?php echo e(asset('profile/img/personal.jpg')); ?>" height="450" alt="">
                <?php endif; ?>
							</div>
							<div class="media-body">
								<div class="personal_text">
                  <?php if($user->name): ?>
									  <h3><?php echo e($user->name); ?></h3>
                  <?php else: ?>
									  <h3>Donald McKinney</h3>
                  <?php endif; ?>
                  <?php if($user->pekerjaan): ?>
									  <h4><?php echo e($user->pekerjaan); ?></h4>
                  <?php else: ?>
									  <h4>Junior UI/UX Developer</h4>
                  <?php endif; ?>
									<ul class="list basic_info">
                    <?php if($user->tanggal_lahir): ?>
										  <li><a href="#"><i class="lnr lnr-calendar-full"></i><?php echo e(date('l, d F Y', strtotime($user->tanggal_lahir))); ?></a></li>
                    <?php else: ?>
										  <li><a href="#"><i class="lnr lnr-calendar-full"></i>Saturday, 26 October 2002</a></li>
                    <?php endif; ?>
                    <?php if($user->telepon): ?>
										  <li><a href="#"><i class="lnr lnr-phone-handset"></i><?php echo e($user->telepon); ?></a></li>
                    <?php else: ?>
										  <li><a href="#"><i class="lnr lnr-phone-handset"></i>+62 812 4683 5129</a></li>
                    <?php endif; ?>
                    <?php if($user->email): ?>
										  <li><a href="#"><i class="lnr lnr-envelope"></i><?php echo e($user->email); ?></a></li>
                    <?php else: ?>
										  <li><a href="#"><i class="lnr lnr-envelope"></i>adhiariyadi40@gmail.com</a></li>
                    <?php endif; ?>
                    <?php if($user->address && $user->kelurahan && $user->kecamatan && $user->kabupaten && $user->provinsi): ?>
										  <li><a href="#"><i class="lnr lnr-home"></i><?php echo e($user->address); ?>, <?php echo e($user->kelurahan); ?>, <?php echo e($user->kecamatan); ?>, <?php echo e($user->kabupaten); ?>, <?php echo e($user->provinsi); ?></a></li>
                    <?php else: ?>
										  <li><a href="#"><i class="lnr lnr-home"></i>Ponorogo, Jawa Timur</a></li>
                    <?php endif; ?>
									</ul>
								</div><br><br>
                <a href="/" class="btn btn-primary">Home</a>
                <a href="<?php echo e(route('edit_profil', Auth::user()->id)); ?>" class="btn btn-success">Edit Profile</a>
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo e(asset('profile/js/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/js/popper.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/js/stellar.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/lightbox/simpleLightbox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/nice-select/js/jquery.nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/isotope/imagesloaded.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/isotope/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/popup/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/js/jquery.ajaxchimp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/counter-up/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/vendors/counter-up/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/js/mail-script.js')); ?>"></script>
        <script src="<?php echo e(asset('profile/js/theme.js')); ?>"></script>
        <script src="<?php echo e(asset('user/js/main.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\SISTEM INFORMASI PENJUALAN ONLINE\Toko-Online-Laravel\resources\views/user/profile.blade.php ENDPATH**/ ?>