@extends('user.layout.app')
@section('content')
<section class="content marketing">   
	
	<div class="left-sec col-md-8">
		<h3> Featured Videos </h3>

		@if($featured_video) 
	  		<div class="video-sec">
	  			<iframe src="{{$featured_video->embd_code}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  		</div>
  		@endif

  		@if($categories) 	
  		
	  		<div class="recent-videos">
	  			
	  			<h4 class="short-heading"> Recent Videos </h4>
	  			<div class="row-sec">
	  				@foreach($latest_videos as $videos)
			  			<div class="video-frame col-sm-3">
			  				<iframe src="{{$videos->embd_code}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  				
			  				<a class="titles" href="{{ url('/video/detail') }}/{{$videos->id}}"> {{$videos->title}} </a>
			  				<span class="post-on">  Added {{$videos->created_at->diffForHumans()}} </span>
			  			</div>
			  		@endforeach
		  			
	  			</div>
	  		</div>
  		@endif

  		<div class="popular-videos-sec">
  			<h4 class="short-heading"> Popular Videos </h4>
  			
  			
  			<div class="row-sec">

	  			@foreach($popular_video as $videos)

	  			<div class="video-frame col-sm-3">
			  				<iframe src="{{$videos->embd_code}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  				
			  				<a class="titles" href="{{ url('/video/detail') }}/{{$videos->id}}"> {{$videos->title}} </a>
			  				<span class="post-on">  Added {{$videos->created_at->diffForHumans()}} </span>
			  			</div>
		  			
	  			
		  		@endforeach
	  			
  			</div>
  			
  		</div>
 	</div>

 	@if($categories)
 		<div class="right-sec col-md-4">
 		<h3> Search  </h3>
 		<div class="filters">
 			<form action="{{ url('search') }}" method="POST" role="search">
            {{ csrf_field() }}
            	<div class="form-group">
		 			<input type="text" class="search-bar" name="q" placeholder="Type your choice.." />
		 			<button type="submit" class="search-btn"> </button>
	 			</div>
	 			
	        </form>

 			<label class="">Search by category </label>
 			<select class="select" id="selectbox" onchange="javascript:location.href = this.value;">
 				@foreach($categories as $cat)
	 				<option value="{{ url('/video/category')}}/{{$cat['id']}}">{{$cat['name']}}</option>
	 			@endforeach	
 			</select>
 		</div>
 	
  		
 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 				@foreach($categories as $cat)
	 					<li> <a href="{{ url('/video/category')}}/{{$cat['id']}}">{{$cat['name']}}</a></li>
	 				@endforeach
	 				
	 			</ul> 		
 			</div>	
 		</div>
 	@endif

 	@if($latest_articles) 
 		<div class="article-sec"> 			
 			<h3> Latest Articles </h3>
 			<div class="scroll-way">
 				@foreach($latest_articles as $latest)
		 			<div class="col-sm-12">
		 				<a href="{{ url('/article/detail') }}/{{$latest['id']}}"> {{$latest['title']}} </a>
		 				 <?php echo substr($latest['description'], 0, 100) . '...';?>		
		 				 
		 			</div>
	 			@endforeach
	 			
 			</div>			
 		</div>
 	@endif
 		
 	@if($latest_product)	
 		<div class="product-sec"> 			
	 		<h3> Featured Product </h3>
	 			<div class="scroll-way">
	 				@foreach($featured_product as $product)	 				
			  			<div class="product-cat col-sm-6">
						  	<div class="product-img">
						  		<div class="img" style="background: url({{asset('/storage/'.$product->picture)}}) no-repeat center center / cover;"> </div>
			  					<!-- <img class="video-img" src="{{asset('/storage/'.$product->picture)}}" /> -->
			  				</div>  				
			  				<a class="titles" href="{{ url('/product/detail') }}/{{$product->id}}" target="_blank">  {{$product->title}}</a>
			  				<span class="post-on">  Added {{$product->created_at->diffForHumans()}}  </span>
			  			</div>
			  		@endforeach
		  			
		  		</div>	
	 	</div>
 		
 	@endif
	</div>	
			
</section>
@endsection