@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row">
        	<div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading"><span style="font-size:1.2em;"><b>Join a Campaign Team</b></span></div>

	                <div class="panel-body">
	                	{!! Form::open(['url' => '/campaign/jointeam', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                        @include('common.errors')
                        @include('common.flash')
                        @include ('campaign.teampartial')
                        {!! Form::close() !!}
	                </div>
	            </div>
        </div>
    </div>
@endsection