@extends('layouts.app')

@section('content')
    {!! Form::model($user) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">
                <a href="{{ URL::route('users.index') }}" class="btn btn-info">Back</a>
            </div>
            @if ($user->id != 1) <!-- Administrator -->
            <div class="pull-right">
                <form action="{{ url('users/'.$user->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                    <button style="height: 24px;" type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{ URL::route('users.edit', ['id' => $user->id, 'method' => 'GET']) }}" class="btn btn-primary" style="color: white;">Edit</a>
            </div>
            @endif
            <div><h3>View User: {{ $user->name }}</h3></div>
        </div>

        @include ('users.partial', ['CRUD_Action' => 'View'])
    </div>
    {!! Form::close() !!}
@stop
