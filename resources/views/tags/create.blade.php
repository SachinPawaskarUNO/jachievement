@extends('layouts.app')

@section('content')
{!! Form::open(['url' => 'tags']) !!}
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="pull-left">
            @if ($tagfor == "SkeletalElement")
                <a href="{{ URL::route('skeletalelements.edit', ['id' => $skeletalelement->id, 'method' => 'GET']) }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
            @endif
        </div>
        <div class="pull-right">
            {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
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
    .table td { border: 0px !important; }
</style>
@stop