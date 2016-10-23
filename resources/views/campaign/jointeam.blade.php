@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if (!Auth::check())
			<div class="alert alert-warning">
				<strong>Login Required:</strong> Before joining a team, please <a href="/login">login</a> or <a href="/register">register</a>
			</div>
			@else
			<div class="panel panel-default">
				<div class="panel-heading"><span style="font-size:1.2em;"><b>{{ $heading}}</b></span></div>

				<div class="panel-body">
					@if ($action == 'join')
					{!! Form::open(['url' => '/campaign/jointeam', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
					@else
					{!! Form::open(['url' => '/campaign/createteam', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
					@endif
					@include('common.errors')
					@include('common.flash')
					@include ('campaign.teampartial')
					{!! Form::close() !!}

				</div>
			</div>
			@endif
		</div>
	</div>
	@endsection