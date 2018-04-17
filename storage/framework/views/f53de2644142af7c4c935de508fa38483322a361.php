<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  	<title><?php echo e(config('app.name')); ?></title>
	<link href="<?php echo e(asset('asset/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/fontawesome/css/fontawesome-all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('asset/css/responsive.css')); ?>" rel="stylesheet"> 
    
    <script src="<?php echo e(asset('asset/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('asset/js/bootstrap.min.js')); ?>"></script>
</head>
<body class="nav-md">
<div class="container body">
  <div class="row">
    <div class="main_container">
    	<?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    	 <?php echo $__env->yieldContent('content'); ?>  	    	
		<?php echo $__env->make('user.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>          
    </div>
  </div>
</div>
<?php echo $__env->make('user.includes.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('user.includes.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
