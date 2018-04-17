@extends('user.layout.app')
@section('content')
<section class="content">
	
	<div class="left-sec col-md-8">
		@if($settings->picture_file != "")
  		<div id="mainslider" class="carousel slide" data-ride="carousel">    
        	<img src="{{ asset('/storage/'.$settings->picture_file) }}" alt="" />        
  		</div>
  		@endif
		<div class="content-area clearfix">
            <div class="post-list">    	
        			{!!$settings->description!!}
            </div>			
		</div>
	</div> 	
	@include('user.includes.mlt_sidebar')   	
</section>
@endsection