<?php $__env->startSection('title', 'Videos '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
            <a href="<?php echo e(route('admin.video.index')); ?>" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

			<h5 style="margin-bottom: 2em;">New Video</h5>

            <form class="form-horizontal" action="<?php echo e(route('admin.video.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
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
						<input class="form-control" type="text" value="<?php echo e(old('title')); ?>" name="title" required id="title" placeholder="Video Title">
					</div>
				</div>

				<div class="form-group row">
					<label for="last_name" class="col-xs-12 col-form-label">Description</label>
					<div class="col-xs-10">
						<textarea name="description" id="myeditor"></textarea>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="last_name" class="col-xs-12 col-form-label">Embed Code</label>
					<div class="col-xs-10">
						<textarea name="embd_code" class="form-control" style="height:100px;"></textarea>
					</div>
				</div>
				
				<div class="form-group row">
					<?php if($featured_video): ?>
						<label for="mobile" class="col-xs-12 col-form-label">Featured ( There can be only one Featured Video )</label>
					<?php else: ?>
						<label for="mobile" class="col-xs-12 col-form-label">Featured</label>
					<?php endif; ?>


					<div class="col-sm-9">	
					<?php if($featured_video): ?>								
						<label class="radio-inline"> <input type="radio" value="1" name="is_featured" id="featured1" disabled="disabled"> Yes </label> 

					<?php else: ?>
						<label class="radio-inline"> <input type="radio" value="1" name="is_featured" id="featured1"> Yes </label>
					<?php endif; ?>
						<label class="radio-inline"> <input type="radio" value="0" name="is_featured" id="featured2"> No</label> 									 
					</div>
				</div>
				
				<div class="form-group row" style="display:none">
					<label for="mobile" class="col-xs-12 col-form-label">Private</label>
					<div class="col-sm-9">									
						<label class="radio-inline"> <input type="radio" value="1" name="is_private" id="private1"> Yes </label> 
						<label class="radio-inline"> <input type="radio" value="0" name="is_private" id="private2"> No</label> 									 
					</div>
				</div>
				
				<div class="form-group row">
					<label for="mobile" class="col-xs-12 col-form-label">Status</label>
					<div class="col-sm-9">									
						<label class="radio-inline"> <input type="radio" value="1" name="status" id="status1"> Yes </label> 
						<label class="radio-inline"> <input type="radio" value="0" name="status" id="status2"> No</label> 									 
					</div>
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Create</button>
						<a href="<?php echo e(route('admin.video.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
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