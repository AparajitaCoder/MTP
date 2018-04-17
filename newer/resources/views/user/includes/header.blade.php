<header>
	<div class="top-header">
  		<div class="col-md-3 logo">
  			<img src="{{ asset('/asset/logo.png') }}" alt="METIP" />
  		</div>
  		<div class="pull-right login-right">
<!--   			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#loginPopup">Login</button> -->
<!--   			<button type="button" class="btn btn-default yellow" data-toggle="modal" data-target="#registerPopup">Register</button> -->
				<a href="{{url('/user/login')}}"><button type="button" class="btn btn-default" >Login</button></a>
				<a href="{{url('/user/register')}}"><button type="button" class="btn btn-default yellow">Register</button></a>
  		</div>
  	</div>  	
	<nav class="nav">
		<ul class="navigation">
			<li class="{{ (Request::path() == '/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
			<li class="{{ (Request::path() == 'static/about-us') ? 'active' : '' }}"><a href="{{ url('/static/about-us') }}">About us</a></li>
			<li class="{{ (Request::path() == 'static/innovation') ? 'active' : '' }}"><a href="#;">Innovation</a></li>
			<li class="{{ (Request::path() == 'static/marketing') ? 'active' : '' }}"><a href="#;">Marketing</a></li>
			<li class="{{ (Request::path() == 'static/support') ? 'active' : '' }}"><a href="#;">Support</a></li>
			<li class="{{ (Request::path() == 'static/mlt') ? 'active' : '' }}"><a href="#;">MLT</a></li>
			<li class="{{ (Request::path() == 'contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
		</ul>
	</nav>
</header>