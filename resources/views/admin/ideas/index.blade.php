@extends('admin.layout.base')

@section('title', 'Ideas ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1">
                {{ $heading }}              
            </h5>
            @if ($type == 1)
            <a href="{{ route('admin.idea.create') }}?type={{$type}}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
            @endif
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>   						
                        <th>Id</th>            
                        @if ($type == 1)            
                        <th>Idea Competition Name</th>
                        @elseif ($type == 2)
                        <th>Public Challenge Name</th>
                        @endif     
                        <th>No of Participants</th>
                        <th>Publish</th>
                        <th>Active</th>
                        <th>Approve</th>
                        <th>Deadline</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ideas as $index => $idea)
                    <tr>                         	   	
                        <td>{{ $index + 1 }}</td>                        
                        <td><a href="{{ route('admin.idea.solutions') }}?idea_id={{$idea->id}}">{{ $idea->title }}</a></td>           
                        <td><a href="{{ route('admin.idea.solutions') }}?idea_id={{$idea->id}}">{{$idea->total_solutions}}</a></td>
                        <td>{{ ($idea->publish == 1) ? 'Yes' : 'No' }}</td>          
                        <td>{{ ($idea->active == 1) ? 'Active' : 'Inactive' }}</td>         
                        <td>{{ ($idea->approve == 1) ? 'Approved' : 'Not Approved' }}</td>  
                        <td>{{ ($idea->end_date != "0000-00-00") ? date("M d, Y", strtotime($idea->end_date)) : 'N/A' }}</td>          
                        <td>                                  
                             <a href="{{ route('admin.idea.edit', $idea->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i> @lang('admin.edit')</a>                             
                             <a href="{{ route('admin.idea.destroy', $idea->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> @lang('admin.delete')</a>                             
                        </td>
                    </tr>
                    @endforeach
                </tbody>                
            </table>            
        </div>
    </div>
</div>

@endsection
