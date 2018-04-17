<?php $__env->startSection('title', 'Static Pages'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5><?php echo e($page->heading); ?></h5>

            <div className="row">
                <form action="<?php echo e(route('admin.pages.update')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e($page->id); ?>">
                    <div class="form-group row">
    					<label for="first_name" class="col-xs-12 col-form-label">Heading</label>
    					<div class="col-xs-10">
    						<input class="form-control" type="text" value="<?php echo e($page->heading); ?>" name="heading" required id="heading" placeholder="Heading">
    					</div>
    				</div>
				
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea name="content" id="myeditor"><?php echo e($page->content); ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="col-xs-12 col-md-3 offset-md-6">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>
                </form>
            </div>
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