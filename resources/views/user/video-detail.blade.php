@extends('user.layout.app')
@section('content')
<section class="content marketing details">   
	
	<div class="left-sec col-md-8">		
  		<div class="video-sec">
  			<h2 class="video-title"> {{ $video_detail->title}} </h2>

       <div class="post-by"> 
                 <span class="total-views">Total views : <strong>{{ $video_detail->total_views}}</strong></span></div>

  			<iframe src="{{ $video_detail->embd_code}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  			<div class="description">
  				<h3 class="short-title"> Description </h3>
  			{!! $video_detail->description !!}
  			</div>
  			<div class="comments-section">
  				<h3 class="short-title">Post your comment</h3>
  				<div class="col-sm-2 pd0">
  					<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" alt="" />
  				</div>
  				<div class="col-sm-10 pd0">
  					<textarea class="text-area" placeholder="Your Comment"></textarea>
  					<input type="submit" class="submit-btn yellow btn" value="Submit" />
  				</div>
  			</div>
  			
  			<div class="view-comments">
  				<h3 class="short-title"> Comments </h3>
  				<div class="comment-row">
  					<figure class="user-img">
  						<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" />
  					</figure>
  					<div class="right-comment">
  						<span class="name"> User1 </span>
  						<span class="cmnt-on">Added 0 seconds ago</span>
  						<p class="comment"> On this week's show, we have Sara Dietschy on to talk about the best cameras for vlogging, our senior Features Editor, Michael Zelenko, joins us to talk about minimalist phones like the Light Phone, and we look at some smart </p>
  				<a class="reply-btn" href="#_"> Reply </a>
  					</div>
  					
  					<div class="reply">  						
	  					<figure class="user-img">
	  						<img src="https://demo.phpmelody.com/uploads/avatars/default.gif" />
	  					</figure>
	  					<div class="right-comment">
	  						<span class="name"> User1 </span>
	  						<span class="cmnt-on">Added 0 seconds ago</span>
	  						<p class="comment"> On this week's show, we have Sara Dietschy on to talk about the best cameras for vlogging, our senior Features Editor, Michael Zelenko, joins us to talk about minimalist phones like the Light Phone, and we look at some smart </p>
  				<a class="reply-btn" href="#_"> Reply </a>
	  					</div>
  					</div>
  				</div>
  			</div>
  		</div>  	

 	</div>
 	
 	@if($related_video) 
 	
 	<div class="right-sec col-md-4">
 		
 		<div class="popular-videos"> 

    
	
 			<h3> Related Videos </h3>
 			<div class="scroll-way">		
	  					
	  		    @foreach($related_video as $videos)			
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
                <a class="titles" href="{{$product->url}}" target="_blank">  {{$product->title}}</a>
                <span class="post-on">  Added {{$product->created_at->diffForHumans()}}  </span>
              </div>
            @endforeach
            
          </div>  
    </div>
    
  @endif  
 		</div>
 	</div>
 	@endif
		
			
</section>
@endsection