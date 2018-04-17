@extends('user.layout.app')
@section('content')
<section class="content marketing details articles">   
	
	<div class="left-sec col-md-8">
		<div class="article-sec">
			<!-- <h3>  </h3> -->
  			<h2 class="video-title">{{ $video_detail->title}} </h2>
        <div class="post-by"> <span class="post-on"> {{ $video_detail->created_at->format('M d, Y')}} by </span> <span class="user-name">{{$video_detail->admin->first_name}}</span>
                 <span class="total-views">Total views : <strong>{{ $video_detail->total_views}}</strong></span></div>
                 
         @if($video_detail->picture)
      <img src="{{asset('/storage/'.$video_detail->picture)}}" style="max-width: 100%;margin-bottom: 10px;" />
    @endif
  			
		<?php echo $video_detail->description;?>
   
		</div>		
		
		
  		<div class="video-sec">
  			<!-- <iframe src="https://www.youtube.com/embed/RzChHvJ7GEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
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
 	
 	<div class="right-sec col-md-4">


    <div class="category-sec">      
      <h3> Categories </h3>
      <div class="scroll-way">
      	<ul>
        @if($cats) 
            @foreach($cats as $cat) 
              @if($cat->id == $video_detail->category_id)
                <li class="active"> <a href="{{ url('/article/category')}}/{{$cat->id}}">{{$cat->name}} </a></li>
              @else
                <li> <a href="{{ url('/article/category')}}/{{$cat->id}}">{{$cat->name}} </a></li>
              @endif
            @endforeach 
          @endif
          </ul>    
      </div>  
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
		
			
</section>
@endsection