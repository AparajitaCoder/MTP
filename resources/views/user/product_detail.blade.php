@extends('user.layout.app')
@section('content')
<section class="content marketing details articles"> 

	
	 <div class="left-sec col-md-8">

    @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
    @endif 
    <div class="article-sec">
      <!-- <h3>  </h3> -->
        <h2 class="video-title">{{ $video_detail->title}} </h2>
        <div class="post-by">
                 <span class="total-views">Total views : <strong>{{ $video_detail->total_views}}</strong></span></div>
         @if($video_detail->picture)
         <div class="prdct-sec">
      		<img class="bigger-img" src="{{asset('/storage/'.$video_detail->picture)}}" />
      	 </div>
    @endif
        
    <?php echo $video_detail->description;?>
    
    <div class="bottom-sec">
    @if($video_detail->pdf_link)
      <a href="{{asset('/storage/'.$video_detail->pdf_link)}}" class="download">Download Product Manual</a>
    @endif

   <!--  <a href="{{ url('/mail/product') }}/{{$video_detail->id}}" >Send Mail</a> -->

     <div id="sendmail" class="mail-btn">Send product details on email</div>

     <form method="post"  action="{{URL::to('mail/product')}}">

     <input type="email" name="send_mail" class="" id="send_email" required />
     <input type="hidden" name="product_id" id="product_id" value="{{ $video_detail->id}} ">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

     <input type="submit" name="Send" value="Send Mail" class="btn yellow send-btn" />
     </form>

     </div>
   
   
    </div>    
    
    
   

  </div>
    @if($related_video) 
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

    <div class="article-sec">       
      <h3> Latest Products </h3>
      <div class="scroll-way">
         @foreach($lates_product as $product)         
              <div class="product-cat col-sm-6">
                @if($product->picture)
			  	<div class="product-img">
			  		<div class="img" style="background: url({{asset('/storage/'.$product->picture)}}) no-repeat center center / cover;"> </div>
                  <!-- <img src="{{asset('/storage/'.$product->picture)}}" style="max-width: 100%; margin-bottom: 10px;"/> -->
                </div>
                @endif          
                <a class="titles" href="{{ url('/product/detail') }}/{{$product->id}}" target="_blank">  {{$product->title}}</a>
                <span class="post-on">  Added {{$product->created_at->diffForHumans()}}  </span>
              </div>
            @endforeach
      
      </div>      
    </div>

     <div class="article-sec">       
      <h3> Featured Products </h3>
      <div class="scroll-way">
         @foreach($related_video as $product)         
              <div class="product-cat col-sm-6">
                @if($product->picture)
			  	<div class="product-img">
			  		<div class="img" style="background: url({{asset('/storage/'.$product->picture)}}) no-repeat center center / cover;"> </div>
                  <!-- <img src="{{asset('/storage/'.$product->picture)}}" style="max-width: 100%; margin-bottom: 10px;"/> -->
                </div>
                @endif          
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