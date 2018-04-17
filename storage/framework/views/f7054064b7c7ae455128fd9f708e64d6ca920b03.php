<?php $__env->startSection('content'); ?>
<section class="content marketing">   
	
	<div class="left-sec col-md-8">
		<h3> Featured Videos </h3>

		<?php if($featured_video): ?> 
	  		<div class="video-sec">
	  			<iframe src="<?php echo e($featured_video->embd_code); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  		</div>
  		<?php endif; ?>

  		<?php if($categories): ?> 	
  		
	  		<div class="recent-videos">
	  			
	  			<h4 class="short-heading"> Recent Videos </h4>
	  			<div class="row-sec">
	  				<?php $__currentLoopData = $latest_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  			<div class="video-frame col-sm-3">
			  				<iframe src="<?php echo e($videos->embd_code); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  				
			  				<a class="titles" href="<?php echo e(url('/video/detail')); ?>/<?php echo e($videos->id); ?>"> <?php echo e($videos->title); ?> </a>
			  				<span class="post-on">  Added <?php echo e($videos->created_at->diffForHumans()); ?> </span>
			  			</div>
			  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  			
	  			</div>
	  		</div>
  		<?php endif; ?>

  		<div class="popular-videos-sec">
  			<h4 class="short-heading"> Popular Videos </h4>
  			
  			
  			<div class="row-sec">

	  			<?php $__currentLoopData = $popular_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	  			<div class="video-frame col-sm-3">
			  				<iframe src="<?php echo e($videos->embd_code); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  				
			  				<a class="titles" href="<?php echo e(url('/video/detail')); ?>/<?php echo e($videos->id); ?>"> <?php echo e($videos->title); ?> </a>
			  				<span class="post-on">  Added <?php echo e($videos->created_at->diffForHumans()); ?> </span>
			  			</div>
		  			
	  			
		  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  			
  			</div>
  			
  		</div>
 	</div>

 	<?php if($categories): ?>
 		<div class="right-sec col-md-4">
 		<h3> Search  </h3>
 		<div class="filters">
 			<form action="<?php echo e(url('search')); ?>" method="POST" role="search">
            <?php echo e(csrf_field()); ?>

            	<div class="form-group">
		 			<input type="text" class="search-bar" name="q" placeholder="Type your choice.." />
		 			<button type="submit" class="search-btn"> </button>
	 			</div>
	 			
	        </form>

 			<label class="">Search by category </label>
 			<select class="select" id="selectbox" onchange="javascript:location.href = this.value;">
 				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 				<option value="<?php echo e(url('/video/category')); ?>/<?php echo e($cat['id']); ?>"><?php echo e($cat['name']); ?></option>
	 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
 			</select>
 		</div>
 	
  		
 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 					<li> <a href="<?php echo e(url('/video/category')); ?>/<?php echo e($cat['id']); ?>"><?php echo e($cat['name']); ?></a></li>
	 				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 				
	 			</ul> 		
 			</div>	
 		</div>
 	<?php endif; ?>

 	<?php if($latest_articles): ?> 
 		<div class="article-sec"> 			
 			<h3> Latest Articles </h3>
 			<div class="scroll-way">
 				<?php $__currentLoopData = $latest_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 			<div class="col-sm-12">
		 				<a href="<?php echo e(url('/article/detail')); ?>/<?php echo e($latest['id']); ?>"> <?php echo e($latest['title']); ?> </a>
		 				 <?php echo substr($latest['description'], 0, 100) . '...';?>		
		 				 
		 			</div>
	 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 			
 			</div>			
 		</div>
 	<?php endif; ?>
 		
 	<?php if($latest_product): ?>	
 		<div class="product-sec"> 			
	 		<h3> Featured Product </h3>
	 			<div class="scroll-way">
	 				<?php $__currentLoopData = $featured_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	 				
			  			<div class="product-cat col-sm-6">
						  	<div class="product-img">
						  		<div class="img" style="background: url(<?php echo e(asset('/storage/'.$product->picture)); ?>) no-repeat center center / cover;"> </div>
			  					<!-- <img class="video-img" src="<?php echo e(asset('/storage/'.$product->picture)); ?>" /> -->
			  				</div>  				
			  				<a class="titles" href="<?php echo e($product->url); ?>" target="_blank">  <?php echo e($product->title); ?></a>
			  				<span class="post-on">  Added <?php echo e($product->created_at->diffForHumans()); ?>  </span>
			  			</div>
			  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  			
		  		</div>	
	 	</div>
 		
 	<?php endif; ?>
	</div>	
			
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>