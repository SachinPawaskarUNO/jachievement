@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'tags']) !!}{{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">
                @if ($tagfor == "SkeletalElement")
                    <a href="{{ URL::route('skeletalelements.edit', ['id' => $skeletalelement->id, 'method' => 'GET']) }}"
                       class="btn btn-info">Back</a>
                @endif
            </div>
            <div class="pull-right">
                {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            </div>
            @if ($tagfor == 'SkeletalElement')
                <div><h3>New Tag - for SkeletalElement - {{ $skeletalelement->accession_number }}</h3></div>
            @endif
        </div>

        @include ('tags.partial', ['CRUD_Action' => 'Create'])
    </div>
    {!! Form::close() !!}
@stop

@section('footer')
    <style>
        .table td {
            border: 0px !important;
        }
    </style>
@stop