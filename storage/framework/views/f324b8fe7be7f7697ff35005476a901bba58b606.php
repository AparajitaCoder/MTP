<?php $__env->startSection('content'); ?>
<section class="content marketing details articles">   
	
	<div class="left-sec col-md-8">

	<?php if($cat_article): ?> 
		<?php $__currentLoopData = $cat_article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
			<div class="article-sec">
	  			<h2 class="article-title"> The best vlogging cameras 2018 </h2>
	  			<div class="post-by"> <span class="post-on"> Feb 17, 2016 by </span> <span class="user-name"> Mr. Admin </span></div>
	  			<p>
				A former Special Forces operative turned mercenary is subjected to a rogue experiment that leaves him with accelerated healing powers, adopting the alter ego Deadpool.<br /><br />

	This is the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life. </p>

		  		<div class="video-sec">
		  			<iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		  			<a class="link" href="#_"> Deadpool Official Trailer #1 (2016) - Ryan Reynolds Movie HD </a>
		  			<a class="read-more"> Read More.. </a>
		  		</div>  		  		
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		<?php else: ?>
		<div class="article-sec">

		</div>

	<?php endif; ?>		
		
			
		
		

 	</div>
 	
 	<div class="right-sec col-md-4"> 		
 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 				<?php if($cats): ?> 
						<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	 						<li> <a href="<?php echo e(url('/article/category')); ?>/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?> </a></li>
	 					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					<?php endif; ?>
	 			</ul> 		
 			</div>	
 		</div>	
 	</div>
		
			
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>