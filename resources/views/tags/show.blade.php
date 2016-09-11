@extends('layouts.app')

@section('content')
    {!! Form::model($tag) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">
                <a href="{{ URL::route('tags.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
            </div>
            @if ($tag->id != 1 && $tag->id != 2) <!-- Administrator and Advisor Tags-->
            <div class="pull-right">
                <form action="{{ url('tags/'.$tag->id) }}" method="POST"  onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                    <button style="height: 24px;" type="submit" id="delete-tag-{{ $tag->id }}" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{ URL::route('tags.edit', ['id' => $tag->id, 'method' => 'GET']) }}" class="btn btn-primary"><i class="fa fa-btn fa-edit"></i>Edit</a>
            </div>
            @endif
            @if ($tagfor == 'SkeletalElement')
                <div><h3>View Tag - for SkeletalElement - {{ $skeletalelement->accession_number }}</h3></div>
            @else
                <div><h3>View Tag</h3></div>
            @endif
        </div>

        @include ('tags.partial', ['CRUD_Action' => 'View'])
    </div>
    {!! Form::close() !!}
@stop
