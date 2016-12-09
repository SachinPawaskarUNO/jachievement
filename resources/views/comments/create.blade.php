@extends('layouts.app')

@section('content')
{!! Form::open(['url' => 'comments']) !!}{!! csrf_field() !!}
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="pull-left">
            
            
        </div>
        <div class="pull-right">
            {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>
            <div><h3>New Comment - for SkeletalElement -</h3></div>
        
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