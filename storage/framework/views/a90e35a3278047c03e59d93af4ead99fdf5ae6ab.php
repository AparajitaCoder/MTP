<?php $__env->startSection('content'); ?>
<section class="content marketing details articles">   
	
	<div class="left-sec col-md-8">
		<div class="article-sec">
			<h3> Articles </h3>
  			<h2 class="video-title"><?php echo e($video_detail->title); ?> </h2>
  			<p>
		<?php echo $video_detail->description;?>
		</div>		
		
		
  		<div class="video-sec">
  			<iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  			<div class="comments-section">
  				<h3 class="short-title">Post your comment</h3>
  				<div class="col-sm-2 pd0">
  					<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" alt="" />
  				</div>
  				<div class="col-sm-10 pd0">
  					<textarea class="text-area" placeholder="Your Comment"></textarea>
  					<input type="submit" class="submit-btn yellow btn" value="Submit" />
  				</div>
  			</div>
  			
  			<div class="view-comments">
  				<h3 class="short-title"> Comments </h3>
  				<div class="comment-row">
  					<figure class="user-img">
  						<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" />
  					</figure>
  					<div class="right-comment">
  						<span class="name"> User1 </span>
  						<span class="cmnt-on">Added 0 seconds ago</span>
  						<p class="comment"> On this week's show, we have Sara Dietschy on to talk about the best cameras for vlogging, our senior Features Editor, Michael Zelenko, joins us to talk about minimalist phones like the Light Phone, and we look at some smart </p>
  				<a class="reply-btn" href="#_"> Reply </a>
  					</div>
  					
  					<div class="reply">  						
	  					<figure class="user-img">
	  						<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" />
	  					</figure>
	  					<div class="right-comment">
	  						<span class="name"> User1 </span>
	  						<span class="cmnt-on">Added 0 seconds ago</span>
	  						<p class="comment"> On this week's show, we have Sara Dietschy on to talk about the best cameras for vlogging, our senior Features Editor, Michael Zelenko, joins us to talk about minimalist phones like the Light Phone, and we look at some smart </p>
  				<a class="reply-btn" href="#_"> Reply </a>
	  					</div>
  					</div>
  				</div>
  			</div>
  		</div>  	

 	</div>
 	<?php if($related_video): ?> 
 	<div class="right-sec col-md-4">
 		<div class="article-sec"> 			
 			<h3> Latest Articles </h3>
 			<div class="scroll-way">
 			    <?php $__currentLoopData = $related_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 			<div class="col-sm-12">
	 				<a href="<?php echo e(url('/article/detail')); ?>/<?php echo e($videos->id); ?>"> <?php echo e($videos->title); ?> </a>
	 				 <?php echo substr($videos->description, 0, 100) . '...';?>				
	 			</div>
	 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 		
 			</div>			
 		</div>
 		
 			<?php endif; ?>
 		
 		
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