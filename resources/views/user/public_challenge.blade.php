@extends('user.layout.app')
@section('content')
<section class="content">
	
	<div class="col-md-12">
  
		<div class="content-area clearfix">
            <div class="post-list">
            <h3 class="mb-1">
                Public Challanges  
            </h3>			
        
        <div class="para-desc top-set">
        	<p>Please send us your best idea. if you are the winner of the competition, you will get awareded </p>
        </div>
            
  		<div class="detail-row challanges">
                    @foreach($pchallanges as $index => $pidea)
	  		
		  		<div class="detail-column">
		  			<div class="article-no"><label class="title"> <a href="{{url('/detail/'.$pidea->id)}}">{{$pidea->title}}</a></label></div>		  			
		  			<div class="description-sec">
		  				{!! $pidea->description !!}
		  			</div>
		  			<div class="competition">
		  				<div class="sec-row">
		  					<label> Date posted </label>
		  					<span class="desc"> Jan 14, 2018 </span>
		  				</div>
		  				<div class="sec-row">
		  					<label> Deadline </label>
		  					<span class="desc"> May 13, 2018 </span>
		  				</div>
		  				<div class="sec-row">
		  					<label> Do you have solution? </label>	
		  					<span class="desc">	  					
		                        <form method="post" action="{{route('innovationapply')}}" class="clear">
		        				 {{ csrf_field() }}        
		        				 	<input type="hidden" name="pidea_id" value="{{$pidea->id}}">
		            				<div class="">               					
		                                <button type="submit" class="apply btn yellow-btn">Suggest solution and get reward</button>                                         					
		            			 	</div>
		        				</form>
	        				</span> 
		  				</div>
		  			</div>
		  		</div>
                    @endforeach
  		</div>
            
            </div>
		
			
			
			
            
          	
        	
		</div>
	</div> 		
	 
	
</section>
@endsection