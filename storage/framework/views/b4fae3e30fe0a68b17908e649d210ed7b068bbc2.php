<?php $__env->startSection('content'); ?>
<section class="content marketing details articles">   
	
	 <div class="left-sec col-md-8">
    <div class="article-sec">
      <!-- <h3>  </h3> -->
        <h2 class="video-title"><?php echo e($video_detail->title); ?> </h2>
         <?php if($video_detail->picture): ?>
      <img src="<?php echo e(asset('/storage/'.$video_detail->picture)); ?>" style="max-width: 100%;margin-bottom: 10px;" />
    <?php endif; ?>
        
    <?php echo $video_detail->description;?>
    
    <?php if($video_detail->pdf_link): ?>
      <a href="<?php echo e(asset('/storage/'.$video_detail->pdf_link)); ?>" download>Download</a>
    <?php endif; ?>



     <a id="sendmail">Send Mail</a>

     <form method="post" action="<?php echo e(asset('/storage/'.$video_detail->pdf_link)); ?>">

     <input type="email" name="send_mail" id="send_email" />

     <input type="submit" name="Send" value="Send" />
     </form>

   
   
    </div>    
    
    
      <div class="video-sec">
        <!-- <iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
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
      <h3> Featured Products </h3>
      <div class="scroll-way">
         <?php $__currentLoopData = $related_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
              <div class="video-frame col-sm-6">
                <?php if($product->picture): ?>
                  <img src="<?php echo e(asset('/storage/'.$product->picture)); ?>" style="max-width: 100%; margin-bottom: 10px;"/>
                <?php endif; ?>          
                <a class="titles" href="<?php echo e(url('/product/detail')); ?>/<?php echo e($product->id); ?>" target="_blank">  <?php echo e($product->title); ?></a>
                <span class="post-on">  Added <?php echo e($product->created_at->diffForHumans()); ?>  </span>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      </div>      
    </div>
    
      <?php endif; ?>

      <div class="article-sec">       
        <h3> Latest Products </h3>
        <div class="scroll-way">
           <?php $__currentLoopData = $lates_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
                <div class="video-frame col-sm-6">
                  <?php if($product->picture): ?>
                    <img src="<?php echo e(asset('/storage/'.$product->picture)); ?>" style="max-width: 100%; margin-bottom: 10px;"/>
                  <?php endif; ?>          
                  <a class="titles" href="<?php echo e(url('/product/detail')); ?>/<?php echo e($product->id); ?>" target="_blank">  <?php echo e($product->title); ?></a>
                  <span class="post-on">  Added <?php echo e($product->created_at->diffForHumans()); ?>  </span>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>      
      </div>

      <div class="category-sec">      
      <h3> Categories </h3>
      <div class="scroll-way">
        <?php if($cats): ?> 
            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <li> <a href="<?php echo e(url('/product/category')); ?>/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?> </a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <?php endif; ?>    
      </div>  
    </div>  
  </div>
    
		
			
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>