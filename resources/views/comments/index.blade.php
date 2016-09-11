@extends('layouts.app')
@section('content')

@if (count($comments) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <form action="{{ url('comments/create') }}" method="GET">{{ csrf_field() }}
                    <button type="submit" id="create-comment" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                </form>
            </div>
            <div><h2 style="text-align:center;">Comments</h2></div>
        </div>
        <div class="panel-body">
            <table class="table table-striped cds-datatable">
                <thead><th>Type</th><th>Comment</th><th>Date</th><th>User</th><th class="no-sort">Actions</th></thead><!-- Table Headings -->
                <tbody> <!-- Table Body -->
                @foreach ($comments as $comment)
                    <tr>
                        <td class="table-text"><div><a href="{{ url('/comments', $comment->id) }}">{{ $comment->type() }}</a></div></td>
                        <td class="table-text"><div>{{ $comment->text }}</div></td>
                        <td class="table-text"><div>{{ $comment->created_at }}</div></td>
                        <td class="table-text"><div>{{ $comment->user->name }}</div></td>
                        <td>
                            @if($comment->id != 1 && $comment->id != 2) <!-- Administrator and Advisor Comment -->
                            <div class="pull-right" style="height: 25px;">
                                <form action="{{ url('comments/'.$comment->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('delete') }}
                                    <button type="submit" id="delete-comment-{{ $comment->id }}" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@stop
