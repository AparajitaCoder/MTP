<?php $__env->startSection('content'); ?>
<section class="content post-page">
	<div class="user-page">
  <div class="row">
    <?php echo $__env->make('user.includes.links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
    <div class="col-md-9 user-rigtpart">
    <div class="post-section">
    <div class="top-title">
    	<?php echo $__env->make('common.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <h1><?php echo e($mp->title); ?></h1>
      <p class="posted">by <span class="user_name"><?php echo e(($mp->user_id > 0) ? $mp->user->first_name.' '.$mp->user->last_name : 'Admin'); ?></span> on 	<span class="post-date"><?php echo e(date("M d, Y H:i", strtotime($mp->created_at))); ?></span></p>
      </div>
      <div class="desc-sec">		
	      <div class="desc"><p><?php echo $mp->description; ?></p></div>
	      
	      <div class="col-md-12 row flex-sec">
	          <div class="img-container flexi-sec">
	      		<?php if($mp->picture_file != ""): ?>
	             <img src="<?php echo e(asset('/storage/'.$mp->picture_file)); ?>" width=250/>                    
	            <?php endif; ?>
	          </div>    
	          <div class="video-container flexi-sec">
	          	<?php if($mp->video_file != ""): ?>
	            	 <video width="250" controls>
	                      <source src="<?php echo e(asset('/storage/'.$mp->video_file)); ?>" type="video/mp4">  
	                </video>
	            <?php endif; ?>
	          </div>       
	      </div>
	      
	       <form action="<?php echo e(route('mltsubmitcomment',$mp->id)); ?>" method="post" method="POST" enctype="multipart/form-data" role="form" class="form-horizontal full-form">
	            <?php echo e(csrf_field()); ?>     
	            
				  <div class="comment-container">              
	    				<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>				
	    				<div class="form-group comment-sec">
	    					<span class="col-sm-1 pd0 text-center hide-xs">
	    						<?php if(($mp->correctans == 0) && ($mp->user_id == Auth::guard('user')->user()->id)): ?>
	    							<a class="tick" href="<?php echo e(route('mltupdatesol',$con->id)); ?>" onClick="return confirm('Are you sure?')"><i class="fas fa-check"></i></a>
	    						<?php elseif($mp->correctans == $con->id): ?>
	    							<a class="tick green" href="#;"><i class="fas fa-check"></i></a>
	    						
	    						<?php endif; ?>
	    					</span>
	    					<span class="col-sm-10 row pd0">    					
	    					<div class="comments">
	    						<span class="comnt-by"><?php echo e($con->user->first_name); ?> <?php echo e($con->user->last_name); ?></span>  <?php echo $con->comment; ?>

	    						<span class="comnt-on"><?php echo e(date("M d, Y H:i", strtotime($con->created_at))); ?></span>
	    					</div>   
	    					<label for="mobile" class="col-xs-12 col-form-label">   						    					
	    					</label> 				
	    					</span>	
	    				</div>
	    				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    				
					</div>
					
	            <div class="form-group row">
					<label for="mobile" class="col-xs-12 col-form-label pd0">Post Comment</label>
					<div class="col-xs-12 pd0">
						<textarea class="form-control cmnt-text-area" name="comment" placeholder="Write Your Comment Here.. "></textarea>
					</div>
				</div>			
				<div class="input-row">
	              <button type="submit" class="btn btn-primary yellow">Submit</button>
	              <a href="<?php echo e(route('index')); ?>"><button type="button" class="btn btn-primary yellow">Back</button></a>
	            </div>	
	      </form>
      </div>
      </div>
      
      
      <div class="add-comments">
      	<div class="">
      	</div>
      </div>
    </div>
  </div>
</div>
</section>
<script>
$(document).ready(function(){
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        var name = $(this).attr('name');
        $("#"+name+"text").val(fileName +  '" selected');            
    });
}); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>