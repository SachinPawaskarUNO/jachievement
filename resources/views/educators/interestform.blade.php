@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.2em;color:white;"><b> Educator Interest Form</b></span></div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/educators/interestform', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                        @include('common.errors')
                        @include('common.flash')
                        @include ('educators.partial')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection