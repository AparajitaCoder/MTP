<header>
	<div class="top-header">
  		<div class="col-md-3 logo">
  			<img src="{{ asset('/asset/logo.png') }}" alt="METIP" />
  		</div>
  		@if (!Auth::guard('user')->user())
  		<div class="pull-right login-right">   			
  			<a href="{{url('/user/login')}}"><button type="button" class="btn btn-default" >Login</button></a>
  			<a href="{{url('/user/register')}}"><button type="button" class="btn btn-default yellow">Register</button></a>
  		</div>  	
		@else
		<div class="pull-right login-right">
  			<div class="after-login-header">
  				<a href="{{route('user.home')}}">
           			 <div class="header-user">
             			 <div class="huser-img">
                			<img src="{{asset('/asset/	images/user-img1.png')}}" alt="">
              			</div>
              			{{ucfirst(Auth::guard('user')->user()->first_name)}} {{ucfirst(Auth::guard('user')->user()->last_name)}}          		
            		</div>
        		</a>
        		<div class="logout">
         			 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
    			</div>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
      		</div>
  		</div>
		@endif
	</div> 


	<nav class="nav">
		<ul class="navigation">
			<li class="{{ (Request::path() == '/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
				<li class=""><a href="#_">Marketing</a>
				<ul class="submenu">
				    <li class=""><a href="{{route('article_list')}}">Articles</a></li>
    				<li class=""><a href="{{route('product_list')}}">Products</a></li>
				</ul>
				</li>
			<!-- <li class="{{ (Request::path() == 'innovation') ? 'active' : '' }}"><a href="{{route('innovation')}}">Innovation</a></li>	 -->
      <li class=""><a href="#_">Innovation</a>
        <ul class="submenu">
            <li class=""><a href="{{route('competition')}}">Idea Competition</a></li>
            <li class=""><a href="{{route('challenge')}}">Public Challenge</a></li>
            <li class=""><a href="{{route('send_challenge')}}">Send Public Challenge</a></li>
            
            <li class=""><a href="{{ route('sponser') }}">Sponser / Invester</a></li>
            
            <li class=""><a href="{{route('winner')}}">Winners</a></li>
            @if(!Auth::guard('user')->check() OR (Auth::guard('user')->check() && (Auth::guard('user')->user()->user_type == 4) ) )
              <li class=""><a href="{{ route('metec') }}">Metec Employee</a></li>

            @else
              <li class=""><a href="{{ route('userpost') }}">Metec Employee</a></li>
            @endif
        </ul>
      </li>	
			<li class="{{ (Request::path() == 'mlt') ? 'active' : '' }}"><a href="{{ route('mlthome') }}">MLT</a></li>
        <li class=""><a href="#_">Documentation</a>
        <ul class="submenu">
            <li class=""><a href="{{route('tools')}}">Tools/Machinery</a></li>
            <li class=""><a href="{{route('rules')}}">Rules and Regulation</a></li>
        </ul>
        </li>
			<li class="{{ (Request::path() == 'static/about-us') ? 'active' : '' }}"><a href="{{ url('/static/about-us') }}">About us</a></li>
			<li class="{{ (Request::path() == 'static/support') ? 'active' : '' }}"><a href="#;">Support</a></li>
			<li class="{{ (Request::path() == 'contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
		</ul>
	</nav>

  @if(!empty($admin_script))
    @foreach($admin_script as $ascript)
      {!! $ascript->script !!}
    @endforeach
  @endif
 
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