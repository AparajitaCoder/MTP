@extends('user.layout.app')
@section('content')
<section class="content">
	<div class="user-page">
  <div class="row">
    @include('user.includes.links')
    <div class="col-md-9 user-rigtpart">
    	 @include('common.notify')
    	 @if ($type == 1) 			
        <h1>Best Idea Competitions</h1>      
         @elseif($type == 2)
         <h1>Best Public Challenges</h1>      
         @endif
        <table class="table table-striped table-bordered dataTable" id="table-2">
            <thead>
                <tr>  
                	<th>Competator ID</th>               
                	@if ($type == 1)                             
                    <th>Idea Competition Name</th>
                    @elseif($type == 2)                         
                    <th>Public Challenge Name</th>
                    @endif     
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ideas as $index => $inv) 
                <tr>	                	                 	
                    <td>{{ $inv->uid }}</td>                        
                    <td>{{ $inv->title }}</td>
                    <td>{!! $inv->admin_comment !!}</td>                   
                    <td>
                    	<form action="{{route('ideaswishlist')}}" method="POST" role="form" class="form-horizontal">
                    		{{ csrf_field() }}    
                    		<input type="hidden" name="appid" value="{{$inv->id}}">
                    		<input type="hidden" name="type" value="{{$type}}">                                 		
                    		<button name="btn" value="Send this to Wishlist" type="submit" class="btn btn-primary">Send this to Wishlist</button>
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
