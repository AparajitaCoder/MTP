@extends('user.layout.app')
@section('content')
<section class="content">
	<div class="user-page">
  <div class="row">
    @include('user.includes.links')
    <div class="col-md-9 user-rigtpart">
    	 @include('common.notify')
        @if ($type == 1) 			
        <h1>My Idea Wishlist</h1>      
         @elseif($type == 2)
         <h1>My Public Challenges Wishlist</h1>      
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
                    <th>Summary</th>
                    <th>Offer</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ideas as $index => $inv) 
                <tr>	                	                 	
                    <td>{{ $inv->applicant->user_id }}</td>                        
                    <td>{{ $inv->applicant->idea->title }}</td>
                    <td>{!! $inv->applicant->comment !!}</td>
                    <td>{{ ($inv->offer == 0) ? '' : "$".$inv->offer }}</td>
                    <td>{{ ideaStatusName($inv->status) }}</td>                   
                    <td>                    	
                    	<a href="{{ route('setoffer',$inv->id) }}" >Edit/View</a>                    	
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
