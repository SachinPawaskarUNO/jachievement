@extends('layouts.app')

@section('content')
    {!! Form::model($comment) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">
                <a href="{{ URL::route('comments.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
            </div>
            @if ($comment->id != 1 && $comment->id != 2) <!-- Administrator and Advisor Comments-->
            <div class="pull-right">
                <form action="{{ url('comments/'.$comment->id) }}" method="POST"  onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                    <button style="height: 24px;" type="submit" id="delete-comment-{{ $comment->id }}" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{ URL::route('comments.edit', ['id' => $comment->id, 'method' => 'GET']) }}" class="btn btn-primary"><i class="fa fa-btn fa-edit"></i>Edit</a>
            </div>
            @endif
            @if ($commentfor == 'SkeletalElement')
                <div><h3>View Comment - for SkeletalElement - {{ $skeletalelement->fullname }}</h3></div>
            @else
                <div><h3>View Comment</h3></div>
            @endif
        </div>

        @include ('comments.partial', ['CRUD_Action' => 'View'])
    </div>
    {!! Form::close() !!}
@stop
