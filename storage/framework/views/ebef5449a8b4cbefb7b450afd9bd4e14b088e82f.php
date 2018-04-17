<div class="site-sidebar">
	<div class="custom-scroll custom-scroll-light">	
		<ul class="sidebar-menu">
			<?php if(Auth::guard('admin')->user()->role_id == 2): ?>
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.admin_dashboard'); ?></li>
			<li>
				<a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.dashboard'); ?></span>
				</a>
			</li>
			
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.members'); ?></li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-user"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.users'); ?></span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.user.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_users'); ?></a></li>
					<li><a href="<?php echo e(route('admin.user.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_user'); ?></a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-help"></i></span>
					<span class="s-text">Idea Competition</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.idea.index')); ?>?type=1">View</a></li>
					<li><a href="<?php echo e(route('admin.idea.create')); ?>?type=1">Post</a></li>					
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-palette"></i></span>
					<span class="s-text">Public Challenge</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('pcs.index')); ?>">User Sent Challenges</a></li>		
					<li><a href="<?php echo e(route('admin.idea.index')); ?>?type=2">Accepted Challenges</a></li>			
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-layout-tab"></i></span>
					<span class="s-text">METEC Employee</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.metec.index')); ?>?type=1">Metec Post</a></li>
					<li><a href="<?php echo e(route('admin.metec.index')); ?>?type=2">Employee Post</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-money"></i></span>
					<span class="s-text">Sponer/Invester</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.idea.investorindex')); ?>?type=1">View Competition Sponer Investor</a></li>		
					<li><a href="<?php echo e(route('admin.idea.investorindex')); ?>?type=2">View Public Challenge Sponer Investor</a></li>				
				</ul>
			</li>		
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-view-grid"></i></span>
					<span class="s-text">Categories Manager</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.category.index')); ?>">List Categories</a></li>
					<li><a href="<?php echo e(route('admin.category.create')); ?>">Add New Category</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-exchange-vertical"></i></span>
					<span class="s-text">Branches Manager</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.branch.index')); ?>">List Branches</a></li>
					<li><a href="<?php echo e(route('admin.branch.create')); ?>">Add New Branch</a></li>
				</ul>
			</li>
			<!--  
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-exchange-vertical"></i></span>
					<span class="s-text">Industries Manager</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.industry.index')); ?>">List Industries</a></li>
					<li><a href="<?php echo e(route('admin.industry.create')); ?>">Add New Industry</a></li>
				</ul>
			</li> -->
			<?php endif; ?>
			
			<?php if(Auth::guard('admin')->user()->role_id == 3): ?>
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.admin_dashboard'); ?></li>
			<li>
				<a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.dashboard'); ?></span>
				</a>
			</li>	
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-help"></i></span>
					<span class="s-text">Posts</span>
				</a>
				<ul>					
					<li><a href="<?php echo e(route('admin.mlt.index')); ?>?type=2">Employee Post</a></li>
					<li><a href="<?php echo e(route('admin.mlt.index')); ?>?type=1">Inside MLT</a></li>					
				</ul>
			</li>		
			
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-money"></i></span>
					<span class="s-text">Manuals</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.manual.index')); ?>?type=1">Manuals List</a></li>
					<li><a href="<?php echo e(route('admin.manual.create')); ?>?type=1">New Manual</a></li>					
				</ul>
			</li>	
			
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-palette"></i></span>
					<span class="s-text">Settings</span>
				</a>
				<ul>					
					<li><a href="<?php echo e(route('admin.mlt.pagesetup')); ?>">Page Manager</a></li>
				</ul>
			</li>												
			
			<?php endif; ?>
			
			
			<?php if(Auth::guard('admin')->user()->role_id == 4): ?>
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.admin_dashboard'); ?></li>
			<li>
				<a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.dashboard'); ?></span>
				</a>
			</li>			
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-help"></i></span>
					<span class="s-text">Product Manual</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.manual.index')); ?>?type=2">Manual List</a></li>
					<li><a href="<?php echo e(route('admin.manual.create')); ?>?type=2">New Manual</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-palette"></i></span>
					<span class="s-text">Tools / Machinaries</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.tool.index')); ?>">List</a></li>
					<li><a href="<?php echo e(route('admin.tool.create')); ?>">Add Tools</a></li>
					<li><a href="<?php echo e(route('admin.categorytool.index')); ?>">Tool Category</a></li>
				</ul>
			</li>

			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-palette"></i></span>
					<span class="s-text">Rules and Regulation</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.rule.index')); ?>">List</a></li>
					<li><a href="<?php echo e(route('admin.rule.create')); ?>">Add Rules</a></li>
					<li><a href="<?php echo e(route('admin.branchrule.index')); ?>">Branch</a></li>
					<li><a href="<?php echo e(route('admin.departmemnt.index')); ?>">Department</a></li>
				</ul>
			</li>
			<?php endif; ?>
			
			<?php if(Auth::guard('admin')->user()->role_id == 5): ?>
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.admin_dashboard'); ?></li>
			<li>
				<a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.dashboard'); ?></span>
				</a>
			</li>			
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-help"></i></span>
					<span class="s-text">Products Manager</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.product.index')); ?>?type=4">Product List</a></li>
					<li><a href="<?php echo e(route('admin.product.create')); ?>?type=4">New Product</a></li>
					<li><a href="<?php echo e(route('admin.categoryproduct.index')); ?>">Product Category</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-palette"></i></span>
					<span class="s-text">Public Relations</span>
				</a>
				<ul>
					<li  class="with-sub">
						<a href="#" class="waves-effect  waves-light">
        					<span class=""><i class="fa fa-angle-down"></i></span>        					
        					<span class="s-text">Videos Manager</span>
        				</a>
        				<ul>
        					<li><a href="<?php echo e(route('admin.video.index')); ?>">Videos List</a></li>
        					<li><a href="<?php echo e(route('admin.video.create')); ?>">New Video</a></li>
        					<li><a href="<?php echo e(route('admin.categoryvideo.index')); ?>">Video Category</a></li>
        				</ul>
					
					</li>
					<li class="with-sub">
						<a href="#" class="waves-effect  waves-light">
        					<span class="s-caret"><i class="fa fa-angle-down"></i></span>        					
        					<span class="s-text">Article Manager</span>
        				</a>
        				<ul>
        					<li><a href="<?php echo e(route('admin.article.index')); ?>">Articles List</a></li>
        					<li><a href="<?php echo e(route('admin.article.create')); ?>">New Article</a></li>
        					<li><a href="<?php echo e(route('admin.categoryarticle.index')); ?>">Article Category</a></li>
        				</ul>
					
					</li>
				</ul>
			</li>			
			<?php endif; ?>
			
			<?php if(Auth::guard('admin')->user()->role_id == 1): ?>
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.admin_dashboard'); ?></li>
			<li>
				<a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.dashboard'); ?></span>
				</a>
			</li>
			
			
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.members'); ?></li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-crown"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.users'); ?></span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.user.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_users'); ?></a></li>
					<li><a href="<?php echo e(route('admin.user.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_user'); ?></a></li>
				</ul>
			</li>
			
			<li class="menu-title">Subadmin</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-crown"></i></span>
					<span class="s-text">Admin Users</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.admin.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_users'); ?></a></li>
					<li><a href="<?php echo e(route('admin.admin.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_user'); ?></a></li>
				</ul>
			</li>
			
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-layout-tab"></i></span>
					<span class="s-text">Static Pages</span>
				</a>
				<ul>
					<li><a href="<?php echo e(route('admin.pages.list')); ?>">List Pages</a></li>					
				</ul>
			</li>
			<?php endif; ?>
			
			<li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.account'); ?></li>
			<li>
				<a href="<?php echo e(route('admin.profile')); ?>" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-user"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.account_settings'); ?></span>
				</a>
			</li>

			<?php if(Auth::guard('admin')->user()->role_id == 1): ?>

			<!-- <li>
				<a href="" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-settings mr-0-5"></i></span>
					<span class="s-text">Setting</span>
				</a>
			</li> -->

			<li class="with-sub">
						<a href="#" class="waves-effect  waves-light">
        					<span class="s-icon"><i class="ti-settings mr-0-5"></i></span>        					
        					<span class="s-text">Site Settings</span>
        				</a>
        				<ul>
        					<li><a href="<?php echo e(route('admin.settings')); ?>">Add Script</a></li>
        					<!-- <li><a href="<?php echo e(route('admin.commentsettings')); ?>">Comments</a></li> -->
        					
        				</ul>
					
					</li>
			<?php endif; ?>

			<li>
				<a href="<?php echo e(route('admin.password')); ?>" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-exchange-vertical"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.change_password'); ?></span>
				</a>
			</li>			
			<li class="compact-hide">
				<a href="<?php echo e(url('/admin/logout')); ?>"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
					<span class="s-icon"><i class="ti-power-off"></i></span>
					<span class="s-text"><?php echo app('translator')->getFromJson('admin.include.logout'); ?></span>
                </a>

                <form id="logout-form" action="<?php echo e(url('/admin/logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
			</li>
			
		</ul>
	</div>
</div>