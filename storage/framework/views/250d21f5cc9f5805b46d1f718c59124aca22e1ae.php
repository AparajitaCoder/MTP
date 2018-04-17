<?php $__env->startSection('title', 'Add User '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
            <a href="<?php echo e(route('admin.user.index')); ?>" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

			<h5 style="margin-bottom: 2em;">Add Admin User</h5>

            <form class="form-horizontal" action="<?php echo e(route('admin.admin.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>

            	
            	<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label">User Type</label>
					<div class="col-xs-10">
						<?php echo roleTypeDropdown(); ?>						
					</div>
				</div>
				<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label"><?php echo app('translator')->getFromJson('admin.first_name'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e(old('first_name')); ?>" name="first_name" required id="first_name" placeholder="First Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="last_name" class="col-xs-12 col-form-label"><?php echo app('translator')->getFromJson('admin.last_name'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e(old('last_name')); ?>" name="last_name" required id="last_name" placeholder="Last Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-xs-12 col-form-label"><?php echo app('translator')->getFromJson('admin.email'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="email" required name="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="Email">
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-xs-12 col-form-label"><?php echo app('translator')->getFromJson('admin.password'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="password" name="password" id="password" placeholder="Password">
					</div>
				</div>

				<div class="form-group row">
					<label for="password_confirmation" class="col-xs-12 col-form-label"><?php echo app('translator')->getFromJson('admin.account.password_confirmation'); ?></label>
					<div class="col-xs-10">
						<input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type Password">
					</div>
				</div>

				

				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Add Admin</button>
						<a href="<?php echo e(route('admin.user.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>