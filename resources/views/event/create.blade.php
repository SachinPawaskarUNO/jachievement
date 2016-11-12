@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>{{ $heading }}</div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'events', 'class' => 'form-horizontal']) !!}
                        @include('common.errors')
                        @include('common.flash')
                        @include ('event.partial', ['CRUD_Action' => 'Create'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

