<?php $__env->startSection('title', 'Categories '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
            <a href="<?php echo e(route('admin.categoryproduct.index')); ?>" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

			<h5 style="margin-bottom: 2em;">Add Categoryfff</h5>

            <form class="form-horizontal" action="<?php echo e(route('admin.categoryproduct.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>            	
				<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label">Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e(old('name')); ?>" name="name" required id="name" placeholder="Category Name">
					</div>
				</div>

				

				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Add Category</button>
						<a href="<?php echo e(route('admin.categoryproduct.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>