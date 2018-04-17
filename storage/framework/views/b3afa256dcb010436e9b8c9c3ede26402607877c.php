<?php $__env->startSection('content'); ?>
<section class="content marketing details">   
	
	<div class="left-sec col-md-8">		
  		<div class="video-sec">

  			<h2 class="video-title"> <?php echo e($video_detail->title); ?></h2>
  			<iframe src="<?php echo e($video_detail->embd_code); ?>" id="video_detail" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
        <div id="message"></div>
        <input type="hidden" name="video_id" value="<?php echo e($video_detail->id); ?>" id="video_id" />
  			<div class="description">
  				<h3 class="short-title"> Description </h3>
  				 <?php echo $video_detail->description;?>		
  			</div>
  			<div class="comments-section">
  				<h3 class="short-title">Post your comment</h3>
  				<div class="col-sm-2 pd0">
  					<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" alt="" />
  				</div>
  				<div class="col-sm-10 pd0">
  					<textarea class="text-area" placeholder="Your Comment"> </textarea>
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
  					</div>
  				</div>
  			</div>
  		</div>  	

 	</div>
 	
 	<?php if($related_video): ?> 	
	 	<div class="right-sec col-md-4">
	 		
	 		<div class="popular-videos"> 	
	 			<h3> Related Videos </h3>
	 			<div class="scroll-way">	
	 				<?php $__currentLoopData = $related_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  			<div class="video-frame col-sm-12">
			  				<div class="col-sm-4 pd0">  				
			  					<iframe src="<?php echo e($videos->embd_code); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			  				</div>
			  				<div class="col-sm-8">  				
				  				<a class="titles" href="<?php echo e(url('/video/detail')); ?>/<?php echo e($videos->id); ?>"> <?php echo e($videos->title); ?> </a>
				  				<span class="post-on"> Added <?php echo e($videos->created_at->diffForHumans()); ?>  </span>
			  				</div>
			  			</div>		
		  			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		  			
	  			</div>
	 		</div>
	 	</div>
	<?php endif; ?>
		
			
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>