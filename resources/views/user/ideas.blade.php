@extends('user.layout.app')
@section('content')
<section class="content">
	<div class="user-page">
  <div class="row">
    @include('user.includes.links')
    <div class="col-md-9 user-rigtpart">
    	 @include('common.notify')
    	@if ($type == 1) 
        <h1>Idea Competition List</h1>
        @elseif ($type == 2)
        <h1>Public Challenges</h1>
        @endif      
        <table class="table table-striped table-bordered dataTable" id="table-2">
            <thead>
                <tr>   						
                    <th>No</th>                        
                    <th>Name</th>                                   
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ideas as $index => $ida) 
                <tr>	                	                 	
                    <td>{{ $index + 1 }}</td>                        
                    <td><a href="#;">{{ $ida->title }}</a></td>                     
                    <td>{!! $ida->description !!}</td>         
                    <td>
                    	<form method="post" action="{{route('innovationapply')}}" class="clear">
        				{{ csrf_field() }}        
        					<input type="hidden" name="idea_id" value="{{$ida->id}}">
            				<div class="col-md-12">    
            					@if ($type == 1) 
                                <button type="submit" class="btn btn-default yellow-btn">Send me to my competition</button>
                                @elseif ($type == 2)
                                <button type="submit" class="btn btn-default yellow-btn">Suggest solution and get reward</button>
                                @endif                  					
            				</div>
        				</form>
                    </td>      
                </tr>
                @endforeach
            </tbody>            
        </table>        
    </div>  
  </div>
</div>
</section>
@endsection
