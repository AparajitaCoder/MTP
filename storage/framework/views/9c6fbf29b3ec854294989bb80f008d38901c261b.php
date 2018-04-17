<?php $__env->startSection('title', 'Update Idea '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
    	    <a href="<?php echo e(route('admin.departmemnt.index')); ?>" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

			<h5 style="margin-bottom: 2em;">Update Category</h5>

            <form class="form-horizontal" action="<?php echo e(route('admin.departmemnt.update', $category->id )); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>

            	<input type="hidden" name="_method" value="PATCH">

            		<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label">Branch ID</label>
					<div class="col-xs-10">
						<div class="col-xs-10">
						<?php echo dropdown('branch_id',$categories, $category->branch_id); ?>

					</div>
					</div>
				</div>          	
				
            	<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label">Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e($category->name); ?>" name="name" required id="name" placeholder="Category Name">
					</div>
				</div>		

				<div class="form-group row">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Update Category</button>
						<a href="<?php echo e(route('admin.departmemnt.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>