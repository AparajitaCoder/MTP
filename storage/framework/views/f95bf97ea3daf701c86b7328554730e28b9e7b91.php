<?php $__env->startSection('content'); ?>
<section class="content marketing details articles product-list">   
	
	<div class="left-sec col-md-8 list-section">

	<?php if($cat_article): ?> 
		<?php $__currentLoopData = $cat_article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="products">
  			<h2 class="product-name"> <?php echo e($videos->title); ?> </h2>
  			<!-- <div class="post-by"> <span class="post-on"> <?php echo e($videos->created_at->format('M d, Y')); ?> by </span> <span class="user-name"> <?php echo e($videos->admin->first_name); ?> </span></div> -->

  			<?php if($videos->picture): ?>
<figure class="products-img">
				      <img src="<?php echo e(asset('/storage/'.$videos->picture)); ?>"/>
</figure>
				    <?php endif; ?>
  			<?php echo substr($videos['description'], 0, 200) . '...';?>
  			<a class="read-more" href="<?php echo e(url('/product/detail')); ?>/<?php echo e($videos->id); ?>"> View Product </a>

	  		<!-- <div class="video-sec">
	  			<iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  		
	  			<a class="read-more"> Read More.. </a>
	  		</div>   -->		  		
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		<?php echo $cat_article->render(); ?>
	<?php endif; ?>		
	
	
		
			
		
		

 	</div>
 	
 	<div class="right-sec col-md-4">

 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 				<?php if($cats): ?> 
						<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	 						<li> <a href="<?php echo e(url('/product/category')); ?>/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?> </a></li>
	 					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					<?php endif; ?>
	 			</ul> 		
 			</div>	
 		</div>

 		<div class="article-sec"> 			
 			<h3> Featured Products </h3>
 			
 			    <div class="scroll-way">
	 				<?php $__currentLoopData = $related_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	 				
			  			<div class="product-cat col-sm-6">
			  				<?php if($videos->picture): ?>
			  				<figure class="product-img">
						      <img src="<?php echo e(asset('/storage/'.$product->picture)); ?>"/>
						      </figure>
						    <?php endif; ?>  				
			  				<a class="titles" href="<?php echo e(url('/product/detail')); ?>/<?php echo e($product->id); ?>" target="_blank">  <?php echo e($product->title); ?></a>
			  				<span class="post-on">  Added <?php echo e($product->created_at->diffForHumans()); ?>  </span>
			  			</div>
			  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  			
		  		</div>
	 			
	 			
	 		
 			</div>			
 		</div>	
 	</div>
		
			
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>