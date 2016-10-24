@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if (!Auth::check())
			<div class="alert alert-warning">
				<strong>Account Required:</strong> Before joining a team, please <a href="/login">login</a> or <a href="/register">register</a>
			</div>
			@else
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></span></div>

				<div class="panel-body">
					@if ($action == 'join')
					{!! Form::open(['url' => '/campaign/team/join', 'class' => 'form-horizontal', 'method' => 'POST', 'id' => 'campaignForm']) !!}
					@else
					{!! Form::open(['url' => '/campaign/team/create', 'class' => 'form-horizontal', 'method' => 'POST', 'id' => 'campaignForm']) !!}
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
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	function changeGoalSlider(){
		var goalText = document.getElementById("goal").value;

		document.getElementById("fundraisingGoalRange").value = goalText;
	}

	function changeGoalText(){
		var goalSlider = document.getElementById("fundraisingGoalRange").value;

		document.getElementById("goal").value = goalSlider;

	}
</script>
@endsection