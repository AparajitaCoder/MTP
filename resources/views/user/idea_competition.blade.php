@extends('user.layout.app')
@section('content')
<section class="content">
	
	<div class="col-md-12">
  
		<div class="content-area clearfix">
            <div class="post-list">
            <h3 class="mb-1">
               Idea Competitions
            </h3>		
        
        <div class="para-desc top-set">
        	<p>Please send us your best idea. if you are the winner of the competition, you will get awareded </p>
        </div>
		<div class="list-grp comptetion">
			
  		
  		<div class="detail-row">
			@if (!empty($ideas))
				@foreach($ideas as $index => $idea)
	  		
		  		<div class="detail-column">
		  			<div class="article-no"><label class="title"> <a href="{{url('/detail/'.$idea->id)}}">{{$idea->title}}</a></label></div>
		  			
		  			<div class="competition">
		  				<div class="sec-row">
		  					<label> Date posted </label>
		  					<span> Jan 14, 2018 </span>
		  				</div>
		  				<div class="sec-row">
		  					<label> Deadline </label>
		  					<span> May 13, 2018 </span>
		  				</div>
		  				<div class="sec-row">
		  					<label> Do you have an Idea </label>
		  					<span> <a class="apply btn yellow-btn" href="#_">Apply now </a></span>
		  				</div>
		  			</div>
		  		</div>
				@endforeach
			@endif	  	
  		</div>
  		
			<!-- <ul class="side-menu scroll-way">
				@if (!empty($ideas))
	    			@foreach($ideas as $index => $idea)
	    				<li> <a href="{{url('/detail/'.$idea->id)}}">{{$idea->title}}</a> <i class="fa fa-angle-right"></i></li>
	    			@endforeach
				@endif
			</ul> -->
		</div>
            
            </div>
			<div class="pagination">
				{{ $ideas->links() }}
			</div>
			
			
			
           		
        	
		</div>
	</div> 		
	  
	
</section>
@endsection