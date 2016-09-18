@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> {{ $heading }}</div>

                    <div class="panel-body">
                        {!! Form::open(['action' => 'VolunteersController@store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                        @include('common.errors')
                        @include('common.flash')

                        @include ('volunteers.partial', ['CRUD_Action' => 'Create'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection