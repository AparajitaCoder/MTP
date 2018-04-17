<header>
	<div class="top-header">
  		<div class="col-md-3 logo">
  			<img src="<?php echo e(asset('/asset/logo.png')); ?>" alt="METIP" />
  		</div>
  		<?php if(!Auth::guard('user')->user()): ?>
  		<div class="pull-right login-right">   			
			<a href="<?php echo e(url('/user/login')); ?>"><button type="button" class="btn btn-default" >Login</button></a>
			<a href="<?php echo e(url('/user/register')); ?>"><button type="button" class="btn btn-default yellow">Register</button></a>
		</div>  	
		<?php else: ?>
		<div class="pull-right login-right">
  			<div class="after-login-header">
  				<a href="<?php echo e(route('user.home')); ?>">
           			 <div class="header-user">
             			 <div class="huser-img">
                			<img src="<?php echo e(asset('/asset/	images/user-img1.png')); ?>" alt="">
              			</div>
              			<?php echo e(ucfirst(Auth::guard('user')->user()->first_name)); ?> <?php echo e(ucfirst(Auth::guard('user')->user()->last_name)); ?>          		
            		</div>
        		</a>
        		<div class="logout">
         			 <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
    			</div>
				<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>
      		</div>
  		</div>
		<?php endif; ?>
	</div>  	
	<nav class="nav">
		<ul class="navigation">
			<li class="<?php echo e((Request::path() == '/') ? 'active' : ''); ?>"><a href="<?php echo e(url('/')); ?>">Home</a></li>
				<li class=""><a href="#_">Marketing</a>
				<ul class="submenu">
				    <li class=""><a href="<?php echo e(route('article_list')); ?>">Articles</a></li>
    				<li class=""><a href="<?php echo e(route('product_list')); ?>">Products</a></li>
				</ul>
				</li>
			<li class="<?php echo e((Request::path() == 'innovation') ? 'active' : ''); ?>"><a href="<?php echo e(route('innovation')); ?>">Innovation</a></li>		
			<li class="<?php echo e((Request::path() == 'mlt') ? 'active' : ''); ?>"><a href="<?php echo e(route('mlthome')); ?>">MLT</a></li>
			<li class="<?php echo e((Request::path() == 'static/about-us') ? 'active' : ''); ?>"><a href="<?php echo e(url('/static/about-us')); ?>">About us</a></li>
			<li class="<?php echo e((Request::path() == 'static/support') ? 'active' : ''); ?>"><a href="#;">Support</a></li>
			<li class="<?php echo e((Request::path() == 'contact') ? 'active' : ''); ?>"><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
		</ul>
	</nav>






</header>
<style>
    ul.submenu {
    position: absolute;
    z-index: 9;
    background: #fff;
    border: 1px solid #ccc;
    border-top: 0;
    display:none;
}
.navigation { float:left;width:100%;}
.navigation li { float:left;}
.navigation li:hover ul.submenu { display:block;}
ul.submenu li { width:100%; margin: 0 auto;}
ul.submenu li a { width:100%; color: #969696; border-bottom: 1px solid #ccc;}
ul.submenu li:last-child { margin:0;}
ul.submenu li:last-child a { border-bottom:0;}
ul.submenu li a:hover { color:#fff;}
</style>