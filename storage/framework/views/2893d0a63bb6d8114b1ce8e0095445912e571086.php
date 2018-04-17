<?php $__env->startSection('content'); ?>
<section class="content">
	<?php echo $__env->make('user.includes.mlt_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
	
	<div class="right-side col-md-9">
		<?php if($settings->picture_file != ""): ?>
  		<div id="mainslider" class="carousel slide" data-ride="carousel">    
        	<img src="<?php echo e(asset('/storage/'.$settings->picture_file)); ?>" alt="" />        
  		</div>
  		<?php endif; ?>
		<div class="content-area clearfix">
            <div class="post-list">    	
        			<?php echo $settings->description; ?>

            </div>			
		</div>
	</div> 		
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>