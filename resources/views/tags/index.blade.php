@extends('layouts.app')
@section('content')

@if (count($tags) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <form action="{{ url('tags/create') }}" method="GET">{{ csrf_field() }}
                    <button type="submit" id="create-tag" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                </form>
            </div>
            <div><h2 style="text-align:center;">Tags</h2></div>
        </div>
        <div class="panel-body">
            <table class="table table-striped cds-datatable">
                <thead><th>Type</th><th>Tag</th><th>Date</th><th>User</th><th class="no-sort">Actions</th></thead><!-- Table Headings -->
                <tbody> <!-- Table Body -->
                @foreach ($tags as $tag)
                    <tr>
                        <td class="table-text"><div><a href="{{ url('/tags', $tag->id) }}">{{ $tag->type() }}</a></div></td>
                        <td class="table-text"><div>{{ $tag->text }}</div></td>
                        <td class="table-text"><div>{{ $tag->created_at }}</div></td>
                        <td class="table-text"><div>{{ $tag->user->name }}</div></td>
                        <td>
                            @if($tag->id != 1 && $tag->id != 2) <!-- Administrator and Advisor Tag -->
                            <div class="pull-right" style="height: 25px;">
                                <form action="{{ url('tags/'.$tag->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('delete') }}
                                    <button type="submit" id="delete-tag-{{ $tag->id }}" class="btn btn-default"><i class="fa fa-trash"></i></button>
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
