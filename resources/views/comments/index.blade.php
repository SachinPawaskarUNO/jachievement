@extends('layouts.app')
@section('content')

@if (count($comments_data) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
        <!--       <form action="{{ url('comments/create') }}" method="GET">{{ csrf_field() }}
                    <button type="submit" id="create-comment" class="btn btn-primary">Create</button>
                </form>  -->
            </div>
            <div><h2 style="text-align:center;">Comments</h2></div>
        </div>
        <div class="panel-body">
            <table class="table table-striped cds-datatable">
                <thead><th>User Name</th><th>Comment</th><th>Date</th><th>Program Name</th><th class="no-sort">Actions</th></thead><!-- Table Headings -->
                <tbody> <!-- Table Body -->
                @foreach ($comments_data as $comment)
                    <tr>
                        <td class="table-text"><div><a href="{{ url('/comments', $comment->id) }}">{{ $comment->user_id }}</a></div></td>
                        <td class="table-text"><div>{{ $comment->text }}</div></td>
                        <td class="table-text"><div>{{ $comment->id }}</div></td>
						<td class="table-text"><div>{{ $comment->program_id }}</div></td>
                        <td>
						
						<form action="{{ url('admincomments/action'.$comment->id) }}" method="POST">      <button type="submit" id="delete" class="btn btn-success">Approve</button>
								{!!Form::hidden('approve','true')!!}
                        </form>
						
					 <!-- 		{!!Form::open(['url' => 'admincomments/action/'. $comment->id]) !!}
								{!!Form::submit ( 'Approve', array('class' => 'btn btn-success'))!!}
								{!!Form::hidden('approve','true')!!}	
							{!!Form ::close()!!}
							{!!Form::open(['url' => 'admincomments/action/'. $comment->id]) !!}
								{!!Form::submit ( 'Reject', array('class' => 'btn btn-danger'))!!}
								{!!Form::hidden('approve','false')!!}
							{!!Form ::close()!!}
							
							
							
					 		<form action="{{ action('CommentsController@action', [$comment->id]) }}" >
								<button type="submit" id="create-comment" class="btn btn-danger">Reject</button>
								{{!!Form::hidden('approve','false')}}
							</form>
						
						
						
                          @if($comment->id != 1 && $comment->id != 2)    Administrator and Advisor Comment 
                            <div class="pull-right" style="height: 25px;">
                                <form action="{{ url('comments/'.$comment->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('delete') }}
                                    <button type="submit" id="delete-comment-{{ $comment->id }}" class="btn btn-default"></button>
                                </form>
                            </div> 
                            @endif  -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@stop
