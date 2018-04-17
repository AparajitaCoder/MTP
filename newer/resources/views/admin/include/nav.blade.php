<div class="site-sidebar">
	<div class="custom-scroll custom-scroll-light">	
		<ul class="sidebar-menu">
			@if(Auth::guard('admin')->user()->role_id == 2)
			<li class="menu-title">@lang('admin.include.admin_dashboard')</li>
			<li>
				<a href="{{ route('admin.dashboard') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text">@lang('admin.include.dashboard')</span>
				</a>
			</li>
			
			<li class="menu-title">@lang('admin.include.members')</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-crown"></i></span>
					<span class="s-text">@lang('admin.include.users')</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.user.index') }}">@lang('admin.include.list_users')</a></li>
					<li><a href="{{ route('admin.user.create') }}">@lang('admin.include.add_new_user')</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-crown"></i></span>
					<span class="s-text">Idea Competition</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.idea.index') }}">List Ideas</a></li>
					<li><a href="{{ route('admin.idea.create') }}">Post New Idea</a></li>
				</ul>
			</li>
			@endif
			
			@if(Auth::guard('admin')->user()->role_id == 1)
			<li class="menu-title">@lang('admin.include.admin_dashboard')</li>
			<li>
				<a href="{{ route('admin.dashboard') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text">@lang('admin.include.dashboard')</span>
				</a>
			</li>
			
			
			<li class="menu-title">@lang('admin.include.members')</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-crown"></i></span>
					<span class="s-text">@lang('admin.include.users')</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.user.index') }}">@lang('admin.include.list_users')</a></li>
					<li><a href="{{ route('admin.user.create') }}">@lang('admin.include.add_new_user')</a></li>
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
					<li><a href="{{ route('admin.admin.index') }}">@lang('admin.include.list_users')</a></li>
					<li><a href="{{ route('admin.admin.create') }}">@lang('admin.include.add_new_user')</a></li>
				</ul>
			</li>
			
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-layout-tab"></i></span>
					<span class="s-text">Static Pages</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.pages.list') }}">List Pages</a></li>					
				</ul>
			</li>
			@endif
			
			<li class="menu-title">@lang('admin.include.account')</li>			
			<li class="compact-hide">
				<a href="{{ url('/admin/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
					<span class="s-icon"><i class="ti-power-off"></i></span>
					<span class="s-text">@lang('admin.include.logout')</span>
                </a>

                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
			</li>
			
		</ul>
	</div>
</div>