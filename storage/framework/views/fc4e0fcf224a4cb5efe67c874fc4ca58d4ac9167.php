<?php $__env->startSection('title', 'Dashboard '); ?>

<?php $__env->startSection('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('main/vendor/jvectormap/jquery-jvectormap-2.0.3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
<div class="container-fluid">
    <div class="row row-md">
		<div class="col-lg-3 col-md-6 col-xs-12">
			<div class="box box-block bg-white tile tile-1 mb-2">
				<div class="t-icon right"><span class="bg-danger"></span><i class="ti-rocket"></i></div>
				<div class="t-content">
					<h6 class="text-uppercase mb-1">Total Users</h6>
					<h1 class="mb-1">0</h1>					
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-xs-12">
			<div class="box box-block bg-white tile tile-1 mb-2">
				<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
				<div class="t-content">
					<h6 class="text-uppercase mb-1">Total Ideas</h6>
					<h1 class="mb-1">0</h1>
					
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-xs-12">
			<div class="box box-block bg-white tile tile-1 mb-2">
				<div class="t-icon right"><span class="bg-primary"></span><i class="ti-view-grid"></i></div>
				<div class="t-content">
					<h6 class="text-uppercase mb-1">Total Requests</h6>
					<h1 class="mb-1">0</h1>
				</div>
			</div>
		</div>
		
	</div>

	

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>