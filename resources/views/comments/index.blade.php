@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"  style="background-color:#5cb85c !important;">

                    <div style="font-size:1.2em;color:white;"><b>Comments</b></div>
                </div>
                <div class="panel-body">
                    @include('common.flash')
                    @if (count($comments_data) > 0)
                    <table class="table table-striped cds-datatable">
                        <thead><th>User Name</th><th>Comment</th><th>Comment Date</th><th>Program Name</th><th>Roles</th><th>Status</th><th class="no-sort">Actions</th></thead><!-- Table Headings -->
                        <tbody> <!-- Table Body -->
                        @foreach ($comments_data as $comment)
                            <tr>
                                <td class="table-text"><div>{{ $comment->first_name }}</div></td>
                                <td class="table-text"><div>{{ $comment->text }}</div></td>
                                <td class="table-text"><div>{{ $comment->created_at }}</div></td>
                                <td class="table-text"><div>{{ $comment->program_name}}</div></td>
                                <td class="table-text"><div>{{ $comment->role_name}}</div></td>
                                <td class="table-text">
                                    <div>
                                        @if($comment->active == 0)
                                           <span style="color:red"><b>Rejected </b></span>
                                        @else
                                          <span style="color:green"> <b>Accepted </b></span>
                                        @endif
                                    </div>
                                </td>
                                <td class="table-text">
                                    <a href="{{action('CommentsController@accept', [$comment->id])}}" class="btn btn-success">Accept</a>
                                    <a href="{{action('CommentsController@reject', [$comment->id])}}" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="panel-body"><h4>No Comment Records found</h4></div>
                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
@stop
