<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Laravel &mdash; CRUD</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo e(asset('user/css/bootstrap.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/font-awesome.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/flaticon.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/slicknav.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/jquery-ui.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/owl.carousel.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/animate.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('user/css/style.css')); ?>" />

	<?php echo $__env->yieldContent('css'); ?>

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

  	<?php echo $__env->make('template_frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

  	<?php echo $__env->make('template_frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\SISTEM INFORMASI PENJUALAN ONLINE\Toko-Online-Laravel\resources\views/template_frontend/home.blade.php ENDPATH**/ ?>