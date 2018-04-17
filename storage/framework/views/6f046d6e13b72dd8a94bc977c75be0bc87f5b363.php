<?php $__env->startSection('content'); ?>
<section class="content marketing details articles">   
	
	<div class="left-sec col-md-8">

	<?php if($cat_video): ?> 
		<?php $__currentLoopData = $cat_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
			<div class="article-sec">
	  			<h2 class="article-title"> <?php echo e($videos->title); ?> </h2>
	  			<div class="post-by"> <span class="post-on"> Feb 17, 2016 by </span> <span class="user-name"> Mr. Admin </span></div>
	  			 <?php echo substr($videos['description'], 0, 200) . '...';?>

		  		<div class="video-sec">
		  			<iframe src="<?php echo e($videos->embd_code); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		  			<!-- <a class="link" href="<?php echo e(url('/video/detail')); ?>/<?php echo e($videos->id); ?>"> <?php echo e($videos->title); ?> </a> -->
		  			<a href="<?php echo e(url('/video/detail')); ?>/<?php echo e($videos->id); ?>" class="read-more"> Read More.. </a>
		  		</div>  		  		
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<?php endif; ?>	
		
		
		

 	</div>
 	
 	<div class="right-sec col-md-4"> 		
 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 				<?php if($cats): ?> 
						<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	 						<li> <a href="<?php echo e(url('/video/category')); ?>/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?> </a></li>
	 					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					<?php endif; ?>
	 				
	 			</ul> 		
 			</div>	
 		</div>	
 	</div>
		
			
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>