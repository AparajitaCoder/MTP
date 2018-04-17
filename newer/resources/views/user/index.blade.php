@extends('user.layout.app')
@section('content')
<section class="content">
	@include('user.includes.sidebar')   
	
	<div class="right-side col-md-9">
  <div id="mainslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#mainslider" data-slide-to="0" class="active"></li>
      <li data-target="#mainslider" data-slide-to="1"></li>
      <li data-target="#mainslider" data-slide-to="2"></li>
      <li data-target="#mainslider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ asset('/asset/images/slide1.jpg') }}" alt="" />
        <div class="carousel-caption">
          <h2>We works with focus <span>innovate</span> and grow. </h2>
          <p>With over 10 years of experience helping businesses to find </p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/asset/images/slide1.jpg') }}" alt="" />
        <div class="carousel-caption">
          <h2>We works with focus <span>innovate</span> and grow. </h2>
          <p>With over 10 years of experience helping businesses to find </p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/asset/images/slide1.jpg') }}" alt="" />
        <div class="carousel-caption">
          <h2>We works with focus <span>innovate</span> and grow. </h2>
          <p>With over 10 years of experience helping businesses to find </p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/asset/images/slide1.jpg') }}" alt="" />
        <div class="carousel-caption">
          <h2>We works with focus <span>innovate</span> and grow. </h2>
          <p>With over 10 years of experience helping businesses to find </p>
        </div>
      </div>
    </div>
  </div>
		<div class="content-area clearfix">
    <div class="post-list">
    		@foreach($ideas as $index => $idea)
			<div class="content-box">
				<h3>{{ $idea->title }} </h3>
				<span class="publish-date"> Published: {{  date('M d, Y', strtotime($idea->created_at)) }} </span>
				<figure class="col-md-4 left-img">
					<img src="{{ asset('/asset/images/content-img1.jpg') }}" alt="" />
				</figure>
				<div class="col-md-8">
					<p> {!! $idea->description !!} </p>
					<a class="btn btn-default yellow-btn"> Read More </a>
				</div>
			  </div>
			@endforeach
			
    </div>
			<div class="pagination">
				<ul>
					<li class="active"> <a href="#_"> 1 </a> </li>
					<li> <a href="#_"> 2 </a> </li>
					<li> <a href="#_"> 3 </a> </li>
					<li> <a href="#_"> 4 </a> </li>
					<li class="next"> <a href="#_"> >> </a> </li>
				</ul>
			</div>
		</div>
	</div> 		
</section>
@endsection