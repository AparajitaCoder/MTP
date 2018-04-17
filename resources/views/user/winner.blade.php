@extends('user.layout.app')
@section('content')
<section class="content">
	
	
	<div class="col-md-5">
		<div class="para-desc">
			<p> Here we post the names of top ten idea competion winners and public challenge solution providers winners </p>
		</div>
	</div>
	<div class="col-md-7">
  
		<div class="content-area clearfix">
           
            
            <h3 class="mb-1">
               Top ten public challange soloution providers winners
            </h3>		
    		<div class="winner-sec">
    			<ul class="winner-list">
                    @foreach($top10ch as $index => $ideach)
    				<li>
    					<figure class="win-icon"> <img src="https://cdn2.iconfinder.com/data/icons/thin-line-icons-for-seo-and-development-1/64/SEO_awards-256.png" /> </figure> 
    					<span class="count"> {{ $index + 1 }} </span>
    					<span class="winner-name"> {{$ideach->first_name}} {{$ideach->last_name}} </span>
    				</li>
                    @endforeach
    			</ul>    			
    		</div>
		</div>
		
		
  
		<div class="content-area clearfix">
           
            
            <h3 class="mb-1">
                Top ten idea competition winners 
            </h3>	
    		<div class="winner-sec">
    			<ul class="winner-list">
                    @foreach($top10ch as $index => $ideach)
    				<li>
    					<figure class="win-icon"> <img src="https://cdn2.iconfinder.com/data/icons/thin-line-icons-for-seo-and-development-1/64/SEO_awards-256.png" /> </figure> 
    					<span class="count"> {{ $index + 1 }} </span>
    					<span class="winner-name"> {{$ideach->first_name}} {{$ideach->last_name}} </span>
    				</li>
                    @endforeach
    			</ul>    			
    		</div>
		</div>
	</div> 		
	 
	
</section>
@endsection