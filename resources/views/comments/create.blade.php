@extends('layouts.app')

@section('content')
{!! Form::open(['url' => 'comments']) !!}
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="pull-left">
            @if ($commentfor == "SkeletalElement")
                <a href="{{ URL::route('skeletalelements.edit', ['id' => $skeletalelement->id, 'method' => 'GET']) }}" class="btn btn-info">Back</a>
            @endif
        </div>
        <div class="pull-right">
            {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>
        @if ($commentfor == 'SkeletalElement')
            <div><h3>New Comment - for SkeletalElement - {{ $skeletalelement->fullname }}</h3></div>
        @endif
    </div>

    @include ('comments.partial', ['CRUD_Action' => 'Create'])
</div>
{!! Form::close() !!}
@stop

@section('footer')
<style>
    .table td { border: 0px !important; }
</style>
@stop