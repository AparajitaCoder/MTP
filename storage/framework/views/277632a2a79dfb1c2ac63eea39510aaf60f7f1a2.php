<div class="col-md-3 user-sidebar">
	<div class="user-image">
		<?php if(Auth::guard('user')->user()->picture != ""): ?>
			<img src="<?php echo e(asset('/storage/'.Auth::guard('user')->user()->picture)); ?>" alt="">
		<?php else: ?>
			<img src="<?php echo e(asset('/asset/images/user-img-large.jpg')); ?>" alt="">
		<?php endif; ?>
		
	</div>
	<ul class="side-menu">
		<li class="<?php echo e((Request::path() == 'user/home') ? 'active' : ''); ?>"><a
			href="<?php echo e(url('/user/home')); ?>">My Profile <i
				class="fa fa-angle-right"></i></a></li>
		<li class="<?php echo e((Request::path() == 'user/edit_profile') ? 'active' : ''); ?>">
			<a href="<?php echo e(url('/user/edit_profile')); ?>">Edit Profile <i
				class="fa fa-angle-right"></i></a>
		</li>
		<?php if(Auth::guard('user')->user()->user_type == 1): ?>
		<li class="<?php echo e((Request::path() == 'user/ideas' && Request::query('type') == 1) ? 'active' : ''); ?>"><a
			href="<?php echo e(url('/user/ideas')); ?>?type=1">Idea Competition List <i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'user/competitions' && Request::query('type') == 1 ) ? 'active' : ''); ?>"><a
			href="<?php echo e(route('invitations')); ?>?type=1">My Idea Competition List <i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'user/ideas' && Request::query('type') == 2) ? 'active' : ''); ?>"><a
			href="<?php echo e(url('/user/ideas')); ?>?type=2;">Public Challanges <i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'user/competitions' && Request::query('type') == 2 ) ? 'active' : ''); ?>"><a
			href="<?php echo e(route('invitations')); ?>?type=2">My Public Challanges <i
				class="fa fa-angle-right"></i></a>
		</li>		
		<li class="<?php echo e((Request::path() == 'user/yhome') ? 'active' : ''); ?>"><a
			href="#;">My Sponser/Invester <i
				class="fa fa-angle-right"></i></a>
		</li>
		<?php elseif(Auth::guard('user')->user()->user_type == 2 || Auth::guard('user')->user()->user_type == 3): ?>
		<li class="<?php echo e((Request::path() == 'best/ideas' && Request::query('type') == 1) ? 'active' : ''); ?>"><a
			href="<?php echo e(route('bestideas')); ?>?type=1">Best idea competition<i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'ideas/wishlist' && Request::query('type') == 1) ? 'active' : ''); ?>"><a
			href="<?php echo e(route('userwishlist')); ?>?type=1">Wishlist for idea competition <i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'best/ideas' && Request::query('type') == 2) ? 'active' : ''); ?>"><a
			href="<?php echo e(route('bestideas')); ?>?type=2">Best public challenges<i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'ideas/wishlist' && Request::query('type') == 2) ? 'active' : ''); ?>"><a
			href="<?php echo e(route('userwishlist')); ?>?type=2">Wishlist for public challenges <i
				class="fa fa-angle-right"></i></a>
		</li>
		<?php elseif(Auth::guard('user')->user()->user_type == 4): ?>
		<li class="<?php echo e((Request::path() == 'metec/myposts') ? 'active' : ''); ?>"><a
			href="<?php echo e(route('userpost')); ?>">My Posts<i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'metec') ? 'active' : ''); ?>"><a
			href="<?php echo e(route('index')); ?>">Metec Posts <i
				class="fa fa-angle-right"></i></a>
		</li>		
		<?php elseif(Auth::guard('user')->user()->user_type == 5): ?>
		<li class="<?php echo e((Request::path() == 'mlt/myposts') ? 'active' : ''); ?>"><a
			href="<?php echo e(route('mltuserpost')); ?>">My Posts<i
				class="fa fa-angle-right"></i></a>
		</li>
		<li class="<?php echo e((Request::path() == 'mlt/mltpost') ? 'active' : ''); ?>"><a
			href="<?php echo e(route('mltpost')); ?>">MLT Posts <i
				class="fa fa-angle-right"></i></a>
		</li>	
		<li class="<?php echo e((Request::path() == 'mlt/manual') ? 'active' : ''); ?>"><a
			href="<?php echo e(route('manualindex')); ?>">Manuals <i
				class="fa fa-angle-right"></i></a>
		</li>		
		<?php endif; ?>
		
	</ul>
	
	<?php /* ?>
	<ul class="side-menu">
		<li class="{{ (Request::path() == 'user/home') ? 'active' : '' }}"><a
			href="{{url('/user/home')}}">Basic information <i
				class="fa fa-angle-right"></i></a></li>
		<li class="{{ (Request::path() == 'user/edit_profile') ? 'active' : '' }}">
			<a href="{{url('/user/edit_profile')}}">Edit Profile <i
				class="fa fa-angle-right"></i></a>
		</li>
		@if(Auth::guard('user')->user()->user_type == 1)
		<li class="{{ (Request::path() == 'user/addpost') ? 'active' : '' }}">
			<a href="{{url('/user/addpost')}}">Post New Idea <i
				class="fa fa-angle-right"></i></a>
		</li>		
		<li class="{{ (Request::path() == 'user/invitations') ? 'active' : '' }}">
			<a href="{{route('invitations')}}">My Competition <i class="fa fa-angle-right"></i></a>
		</li>
		
		@elseif(Auth::guard('user')->user()->user_type == 2)
		<li class="{{ (Request::path() == 'user/proposals') ? 'active' : '' }}">
			<a href="{{route('proposals')}}">My Proposals <i
				class="fa fa-angle-right"></i></a>
		</li>			
		
		@elseif(Auth::guard('user')->user()->user_type == 3)
		<li class="{{ (Request::path() == 'user/addpost') ? 'active' : '' }}">
			<a href="{{route('proposals')}}">My Proposals <i
				class="fa fa-angle-right"></i></a>
		</li>			
		
		@elseif(Auth::guard('user')->user()->user_type == 4)
		
		@endif
	</ul>
	<?php */ ?>
</div>