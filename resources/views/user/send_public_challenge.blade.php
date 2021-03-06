@extends('user.layout.app')
@section('content')
<section class="content">
	
	<div class="col-md-5">
		<div class="para-desc"> Do you observe any problem/challenge in your area that you think they need some solution . Please send us this challenge we have thousands of people who can deliver you solutions </div>
	</div>
	
	<div class="right-sec col-md-7">
  
		<div class="content-area clearfix">      
			
			
			
			<div class="col-md-12 user-rigtpart">
            	 @include('common.notify')
                <h1>Please send your challenges here</h1>        
                <div class="edit-profile-info pd0">
                  <form action="{{route('addchallenge')}}" method="POST" enctype="multipart/form-data" role="form">
                  {{csrf_field()}}           
                    <div class="row">
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Name</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="text" name="name" required placeholder="Your Name">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Email</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="email" name="email" required placeholder="Your Email">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Mobile</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="text" name="mobile" required placeholder="Your Mobile">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Title</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="text" name="title" required placeholder="Challenge Title">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Description</label></div>
                        <div class="col-md-10 pull-left">                  
                          <textarea class="form-control" name="description" required placeholder="Challenge Description" rows="7"></textarea>
                        </div>
                      </div>
        			  			  
                      <div class="action col-md-12">
                      <div class="col-md-2 pull-left"></div>
                        <div class="col-md-10 pull-left">                  
                          <input type="submit" class="btn btn-default yellow-btn" value="Submit" name="submit">       
                        </div>
                                 
                      </div>
                    </div>
                  </form>
                </div>
            </div>
		</div>
	</div> 		
	
 
	
</section>
@endsection