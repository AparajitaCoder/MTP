<div class="sidebar col-md-3" style="max-width:270px !important;">
		<?php if(!Auth::guard('user')->check() OR (Auth::guard('user')->check() && (Auth::guard('user')->user()->user_type == 2 || Auth::guard('user')->user()->user_type == 3) ) ): ?> 
		<h4 class="list-heading">Sponsor/Invester</h4>
		<ul class="side-menu">			
    		<li style="padding-top:20px;"> <a href="<?php echo e(route('bestideas')); ?>"><button class="btn btn-primary yellow">Sponser or invest on best idea? </button></a></li>
    	</ul>
		<?php endif; ?>
		
		<?php if(!Auth::guard('user')->check() OR (Auth::guard('user')->check() && (Auth::guard('user')->user()->user_type == 4) ) ): ?> 
		<h4 class="list-heading">Metec Employee</h4>
		<ul class="side-menu">			
    		<li style="padding-top:20px;"> <a href="<?php echo e(route('userpost')); ?>"><button class="btn btn-primary yellow"> Metec Employee?</button></a></li>
    	</ul>
		<?php endif; ?>
		
		<h4 class="list-heading">Idea Competitions</h4>
		<ul class="side-menu">
			<?php if(!empty($ideas)): ?>
    			<?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<li> <a href="<?php echo e(url('/detail/'.$idea->id)); ?>"><?php echo e($idea->title); ?></a> <i class="fa fa-angle-right"></i></li>
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</ul>
		
		<h4 class="list-heading">Top ten idea competition winners</h4>
		<ul class="side-menu">			
			<?php if(!empty($top10)): ?>
    			<?php $__currentLoopData = $top10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<li> <?php echo e($idea->first_name); ?> <?php echo e($idea->last_name); ?> <i class="fa fa-angle-right"></i></li>
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</ul>
		
		<!-- 
		<h4 class="list-heading">Our Staff</h4>
		<div class="x_content">
    <ul class="list-unstyled msg_list">
      <li>
        <a>
          <span class="image">
            <img src="<?php echo e(asset('/asset/images/img1.jpg')); ?>" alt="img">
          </span>
          <div class="name"><span>Charles Nicholes</span></div>
          <span class="message">Ceo &amp; Managing Director</span>
        </a>
      </li>
      <li>
        <a>
          <span class="image">
            <img src="<?php echo e(asset('/asset/images/img2.jpg')); ?>" alt="img">
          </span>
          <div class="name"><span>Rebecca Garza</span></div>
          <span class="message">Business Developer</span>
        </a>
      </li>
      <li>
        <a>
          <span class="image">
            <img src="<?php echo e(asset('/asset/images/img3.jpg')); ?>" alt="img">
          </span>
          <div class="name"><span>Stepthen Adams</span></div>
          <span class="message">Finance Officer</span>
        </a>
      </li>
      <li>
        <a>
          <span class="image">
            <img src="<?php echo e(asset('/asset/images/img4.jpg')); ?>" alt="img">
          </span>
          <div class="name"><span>Ben Johnson</span></div>
          <span class="message">Marketing Officer</span>
        </a>
      </li>
    </ul>
  </div> -->
</div>  