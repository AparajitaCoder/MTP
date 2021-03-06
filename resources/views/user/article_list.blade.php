@extends('user.layout.app')
@section('content')
<section class="content marketing details articles">   
	
	<div class="left-sec col-md-8">
		<div class="cat-tags">
			<label>Category : </label><span class="tags"> Bucket List </span>
		</div>
	    @if($cat_article) 
		    @foreach($cat_article as $videos)
        		<div class="article-sec">
          			<h2 class="article-title"> {{$videos->title}} </h2>

          			<div class="post-by"> <span class="post-on"> {{ $videos->created_at->format('M d, Y')}} by </span> <span class="user-name">{{$videos->admin->first_name}}</span>
          			 <span class="total-views">Total views : <strong>{{ $videos->total_views}}</strong></span></div>

          			@if($videos->picture)
				      <img src="{{asset('/storage/'.$videos->picture)}}" style="max-width: 100%; margin-bottom: 10px;"/>
				    @endif
				    
          			<div class="para">
	          			<?php echo substr(strip_tags($videos['description']), 0, 200) . '...';?>
          			</div>

          			
          			<a href="{{ url('/article/detail') }}/{{$videos->id}}" class="read-more"> Read More.. </a>
        
        	  		<!-- <div class="video-sec">
        	  			<iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        	  			
        	  		</div> -->  		  		
        		</div>	
		@endforeach
	@endif
		
		
		
		</div>

 	
 	<div class="right-sec col-md-4"> 		
 		<div class="category-sec"> 			
 			<h3> Categories </h3>
 			<div class="scroll-way">
	 			<ul>
	 			@if($cats) 
						@foreach($cats as $cat)	
	 						<li> <a href="{{ url('/article/category')}}/{{$cat->id}}">{{$cat->name}} </a></li>
	 					@endforeach	
					@endif
	 			</ul> 		
 			</div>	

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

 			@if($featured_product)	
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