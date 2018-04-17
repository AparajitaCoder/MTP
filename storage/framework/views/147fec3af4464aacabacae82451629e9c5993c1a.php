<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="user-page">
      <div class="row">
         <?php echo $__env->make('user.includes.links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
        <div class="col-md-9 user-rigtpart">
          <h1><?php echo e(ucfirst($user->first_name)); ?> <?php echo e(ucfirst($user->last_name)); ?> (<?php echo e(userType($user->user_type)); ?>)<span><i class="fas fa-map-marker-alt"></i> </span></h1>
          <div class="user-type"></div>          
          <div class="user-detail">
          
          	<div class="u-row">
              <label>Picture:</label>
              <div class="u-content">
                 <?php if($user->picture != ""): ?>
                 <img src="<?php echo e(asset('/storage/'.$user->picture)); ?>" width="100">
                 <?php endif; ?>
              </div>
            </div>
            
          	<div class="u-row">
              <label>Email:</label>
              <div class="u-content">
                 <?php echo e($user->email); ?>

              </div>
            </div>
            
            <div class="u-row">
              <label>Phone:</label>
              <div class="u-content">
                <?php echo e($user->mobile); ?>

              </div>
            </div>           
            
            <div class="u-row">
              <label>Sex:</label>
              <div class="u-content">
                 <?php echo e($user->sex); ?>

              </div>
            </div>
            <div class="u-row">
              <label>Date of Birth:</label>
              <div class="u-content">
                 <?php echo e(($user->dob != "") ? date("M d, Y", strtotime($user->dob)) : ''); ?>

              </div>
            </div>
            
             <?php if( userType($user->user_type) == "Competitors"): ?>              
              <div class="u-row">
              <label>Description (Cover Letter):</label>
              <div class="u-content">
                 <?php echo e($user->description); ?>

              </div>
            </div>
            <div class="u-row">
              <label>Kebele ID:</label>
              <div class="u-content">
                 <?php if($user->kebel_id != ""): ?>
                 <a href="<?php echo e(asset('/storage/'.$user->kebel_id)); ?>" target="_blank">View</a>
                 <?php endif; ?>
              </div>
            </div>
            <div class="u-row">
              <label>CV:</label>
              <div class="u-content">
                  <?php if($user->cv != ""): ?>
                 <a href="<?php echo e(asset('/storage/'.$user->cv)); ?>" target="_blank">View</a>
                 <?php endif; ?>
              </div>
            </div>
			  <?php elseif( userType($user->user_type) == "Sponsors" || userType($user->user_type) == "Investors"): ?> 
			   <div class="u-row">
                  <label>Type of the organization:</label>
                  <div class="u-content">
                     <?php echo e($user->org_type); ?>

                  </div>
                </div>
            	<div class="u-row">
                  <label>Position:</label>
                  <div class="u-content">
                     <?php echo e($user->position); ?>

                  </div>
                </div>
			  	<div class="u-row">
                  <label>Description:</label>
                  <div class="u-content">
                     <?php echo e($user->description); ?>

                  </div>
                </div>			  
			  <?php elseif( userType($user->user_type) == "METEC Employees"): ?> 
			  <div class="u-row">
                  <label>Branch Name:</label>
                  <div class="u-content">
                     <?php echo e($user->org_type); ?>

                  </div>
                </div>	
			  	<div class="u-row">
                  <label>Position:</label>
                  <div class="u-content">
                     <?php echo e($user->position); ?>

                  </div>
                </div>		  	  
			  <?php endif; ?>            
          </div>
        </div>
      </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>