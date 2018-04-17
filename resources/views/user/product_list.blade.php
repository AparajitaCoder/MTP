@extends('user.layout.app')
@section('content')
<section class="content marketing details articles product-list">   
	
	<div class="left-sec col-md-8 list-section">
		
	<h4 class="short-heading"> Recent Products </h4>

	@if($cat_article) 
		@foreach($cat_article as $videos)
		<div class="products">
			<a href="{{ url('/product/detail') }}/{{$videos->id}}" class="inner-link">
  			<h2 class="product-name"> {{$videos->title}} </h2>
  			<!-- <div class="post-by"> <span class="post-on"> {{ $videos->created_at->format('M d, Y')}} by </span> <span class="user-name"> {{$videos->admin->first_name}} </span></div> -->

  			@if($videos->picture)
				<div class="products-img">
					<div class="img" style="background:url({{asset('/storage/'.$videos->picture)}}) no-repeat center center / cover;"> </div>
					<!-- <img src="{{asset('/storage/'.$videos->picture)}}"/> -->
				</div>
				    @endif
				    
          			<div class="para">
  						<?php echo substr(strip_tags($videos['description']), 0, 200) . '...';?>
  					</div>
  			
	  		</a>		  
	  		
  			<a class="read-more" href="{{ url('/product/detail') }}/{{$videos->id}}"> View Product </a>

	  		<!-- <div class="video-sec">
	  			<iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  		
	  			<a class="read-more"> Read More.. </a>
	  		</div>   -->		
		</div>
		@endforeach
		
		<?php echo $cat_article->render(); ?>
	@endif		
	<h4 class="short-heading mt20"> Featured Products </h4>
@foreach($related_video as $videos)
	<div class="products">
			<a href="{{ url('/product/detail') }}/{{$videos->id}}" class="inner-link">
  			<h2 class="product-name"> {{$videos->title}} </h2>
  			<!-- <div class="post-by"> <span class="post-on"> {{ $videos->created_at->format('M d, Y')}} by </span> <span class="user-name"> {{$videos->admin->first_name}} </span></div> -->

  			@if($videos->picture)
				<div class="products-img">
					<div class="img" style="background:url({{asset('/storage/'.$videos->picture)}}) no-repeat center center / cover;"> </div>
					<!-- <img src="{{asset('/storage/'.$videos->picture)}}"/> -->
				</div>
				    @endif
  			<?php echo substr(strip_tags($videos['description']), 0, 200) . '...';?>
	  		</a>		  		
  			<a class="read-more" href="{{ url('/product/detail') }}/{{$videos->id}}"> View Product </a>

	  		<!-- <div class="video-sec">
	  			<iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  		
	  			<a class="read-more"> Read More.. </a>
	  		</div>   -->
		</div>
	@endforeach

 	</div>
 	
 	<div class="right-sec col-md-4">

 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 				@if($cats) 
						@foreach($cats as $cat)	
	 						<li> <a href="{{ url('/product/category')}}/{{$cat->id}}">{{$cat->name}} </a></li>
	 					@endforeach	
					@endif
	 			</ul> 		
 			</div>	
 		</div>
<!-- 
 		<div class="article-sec"> 			
 			<h3> Featured Products </h3>
 			
 			    <div class="scroll-way">
	 				@foreach($related_video as $product)	 				
			  			<div class="product-cat col-sm-6">
			  				@if($videos->picture)
			  				<div class="product-img">
			  					<div class="img" style="background: url({{asset('/storage/'.$product->picture)}}) no-repeat center center / cover;"> </div>
						      <!-- <img src="{{asset('/storage/'.$product->picture)}}"/> 
						    </div>
						     @endif  				
			  				<a class="titles" href="{{ url('/product/detail') }}/{{$product->id}}" target="_blank">  {{$product->title}}</a>
			  				<span class="post-on">  Added {{$product->created_at->diffForHumans()}}  </span>
			  			</div>
			  		@endforeach 
		  			
		  		</div>
	 			
	 			
	 		
 			</div> -->

 			<div class="article-sec"> 			
 			<h3> Latest Articles </h3>
 			<div class="scroll-way">
 				@foreach($latest_articles as $latest)
		 			<div class="col-sm-12">
		 				<div class="short-para">
		 				<a href="{{ url('/article/detail') }}/{{$latest['id']}}"> {{$latest['title']}} </a>
		 				 <?php echo substr(strip_tags($latest['description']), 0, 100) . '...';?>
		 				 </div>		
		 				 
		 			</div>
	 			@endforeach
	 			
 			</div>	
	 			
	 			
	 		
 			</div>

 			<div class="article-sec"> 			
 			<h3> Latest Videos </h3>
 			<div class="scroll-way">
 				 @foreach($latest_videos as $videos)			
    	  			<div class="video-frame col-sm-12">
    	  				<div class="col-sm-4 pd0">  				
    	  				<iframe src="{{$videos->embd_code}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  
    	  				</div>
    	  				<div class="col-sm-8">  				
    		  				<a class="titles" href="{{ url('/video/detail') }}/{{$videos->id}}"> {{$videos->title}} </a>
    		  				<span class="post-on"> Added {{$videos->created_at->diffForHumans()}}  </span>
    	  				</div>
    	  			</div>
	  			@endforeach	
	 			
 			</div>
	 			
	 			
	 		
 			</div>


 		</div>	
 	</div>
		
			
</section>
@endsection