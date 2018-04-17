<?php $__env->startSection('title', 'Update Subadmin '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
    	    <a href="<?php echo e(route('admin.admin.index')); ?>" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

			<h5 style="margin-bottom: 2em;">Update Subadmin</h5>

            <form class="form-horizontal" action="<?php echo e(route('admin.admin.update', $admin->id )); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>

            	<input type="hidden" name="_method" value="PATCH">
            	<div class="form-group row">
					<label for="first_name" class="col-xs-2 col-form-label">User Type</label>
					<div class="col-xs-10">
						<?php echo roleTypeDropdown($admin->role_id); ?>						
					</div>
				</div>
				<div class="form-group row">
					<label for="first_name" class="col-xs-2 col-form-label"><?php echo app('translator')->getFromJson('admin.first_name'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e($admin->first_name); ?>" name="first_name" required id="first_name" placeholder="First Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="last_name" class="col-xs-2 col-form-label"><?php echo app('translator')->getFromJson('admin.last_name'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e($admin->last_name); ?>" name="last_name" required id="last_name" placeholder="Last Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-xs-2 col-form-label"><?php echo app('translator')->getFromJson('admin.email'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e($admin->email); ?>" name="email" required id="email" placeholder="Email">
					</div>
				</div>
				
				<div class="form-group row">
					<label for="mobile" class="col-xs-2 col-form-label">Status</label>
					<div class="col-xs-10">
						<input class="form-control" type="checkbox" name="status" id="status" value="1" <?php echo e(@($admin->status == 1) ? 'checked' : ''); ?> >
					</div>
				</div>	

				<div class="form-group row">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Update Admin User</button>
						<a href="<?php echo e(route('admin.user.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>