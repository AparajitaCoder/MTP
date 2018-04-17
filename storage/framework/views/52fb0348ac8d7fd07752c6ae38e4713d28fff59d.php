<?php $__env->startSection('title', 'Tools '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
            <a href="<?php echo e(route('admin.tool.index')); ?>" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

			<h5 style="margin-bottom: 2em;">Add Tool</h5>

                 <form class="form-horizontal" action="<?php echo e(route('admin.tool.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>      
            	
            	<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label">Select Category</label>
					<div class="col-xs-10">
						<?php echo dropdown('category_id',$cats); ?>

					</div>
				</div>
				<div class="form-group row">
					<label for="first_name" class="col-xs-12 col-form-label">Title</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo e(old('title')); ?>" name="title" required id="title" placeholder="Tool Title">
					</div>
				</div>
				<div class="form-group row">
					<label for="last_name" class="col-xs-12 col-form-label">Description</label>
					<div class="col-xs-10">
						<textarea name="description" id="myeditor"></textarea>
					</div>
				</div>	
		
				
				<div class="form-group row">
					<label for="mobile" class="col-xs-12 col-form-label">Private</label>
					<div class="col-sm-9">									
						<label class="radio-inline"> <input type="radio" value="1" name="private" id="status1"> Yes </label> 
						<label class="radio-inline"> <input type="radio" value="0" name="private" id="status2"> No</label> 									 
					</div>
				</div>


				<div class="form-group row">
 					<label for="picture" class="col-xs-12 col-form-label">PDF</label>
					<div class="col-xs-10">
 						<input type="file" accept="pdf/*" name="pdf" class="dropify form-control-file" id="pdf_link" aria-describedby="fileHelp" required>
					</div>
 				</div>


				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Create</button>
						<a href="<?php echo e(route('admin.tool.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('myeditor');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>