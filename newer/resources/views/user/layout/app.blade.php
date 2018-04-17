<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  	<title>{{config('app.name')}}</title>
	<link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/font-awesome/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet"> 
    
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</head>
<body class="nav-md">
<div class="container body">
  <div class="row">
    <div class="main_container">
    	@include('user.includes.header') 
    	 @yield('content')  	    	
		@include('user.includes.footer')          
    </div>
  </div>
</div>
@include('user.includes.signup')
@include('user.includes.login')
</body>
</html>