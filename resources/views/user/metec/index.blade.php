@extends('user.layout.app')
@section('content')
<section class="content">
	<div class="user-page">
  <div class="row mr0">
    @include('user.includes.links')
    <div class="col-md-9 user-rigtpart table-sec">
    	 @include('common.notify')    	
        <div class="left-sec col-md-8">
        <h1>Metec Posts</h1><br>
        <table class="table table-striped table-bordered dataTable" id="table-2">
            <thead>
                <tr>   		
                	<th>No</th>                  				
                    <th>Title</th>                                      
                    <th>Category</th>  
                    <th>Employee Name</th>
                    <th>Position</th>                         
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mps as $index => $inv) 
                <tr>	
                	                 	
                    <td>{{ $index + 1 }}</td>                        
                    <td><a href="{{route('viewpost',$inv->id)}}">{{ $inv->title }}</a></td>
                    <td>{{ $inv->category->name }}</td>
                    @if ($inv->user_id > 0)
                    <td>{{ $inv->user->first_name }} {{ $inv->user->last_name}}</td>
                    <td>{{ $inv->user->position }}</td>
                    @else
                    <td>N/A</td>
                    <td>N/A</td>
                    @endif
                    <td><a href="{{route('viewpost',$inv->id)}}">View Comments</a></td>
                </tr>
                @endforeach
            </tbody>            
        </table>   
        </div>
 	<div class="right-sec col-md-4">
 		<h3 class="short-heading"> Filters  </h3>
 		
 		
 				
 		<div class="filters">
       	<form class="form-horizontal" action="{{route('index')}}" method="GET" role="form">
			{{csrf_field()}}	
 			<div class="form-group">
	 			<label class="">Categories </label>
            	<select name="ca_id" class="select">
            		<option value="">Select Category</option>
            		@foreach ($cats as $ca)
            		<option value="{{$ca['id']}}"  @if($ca['id'] == $ca_id) selected="selected" @endif >{{$ca['name']}}</option>
            		@endforeach                    		                    	
            	</select>
			</div>
			
 			
 			<div class="form-group">
 				<label> Keyword </label>
            	<div class="form-group">
                    <input type="text" name="keyword" value="{{$keyword}}" class="search-bar" placeholder="Type your Keyword.." /> 
		 			<button class="search-btn"> </button>
				</div>
			</div>
			
	 			
	 		<div class="form-group">
	 			<button type="submit" class="btn yellow">Search</button>
	 		</div>
        </form> 
		</div>
        
  		
 		
 		</div>     
    </div>  
  </div>
</div>
</section>
@endsection
