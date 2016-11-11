@extends('layouts.app')

@section('content')
    {!! Form::model($role) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">
                <a href="{{ URL::route('roles.index') }}" class="btn btn-info">Back</a>
            </div>
            <div class="pull-right">
                <form action="{{ url('roles/'.$role->id) }}" method="POST"  onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                    <button type="submit" id="delete-role-{{ $role->id }}" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{ URL::route('roles.edit', ['id' => $role->id, 'method' => 'GET']) }}" class="btn btn-primary">Edit</a>
            </div>

            <div><h3>View Role: {{ $role->name }}</h3></div>
        </div>

        @include ('roles.partial', ['CRUD_Action' => 'View'])
    </div>
    {!! Form::close() !!}
@stop
