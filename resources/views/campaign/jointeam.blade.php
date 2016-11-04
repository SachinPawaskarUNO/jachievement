@extends('layouts.app')

@section('scripts')
<script type="text/javascript">
	$(function() {
		$('#formatGoal').maskMoney();
	})

	function changeGoalSlider(){
		var goalText = $('#formatGoal').maskMoney('unmasked')[0];

		document.getElementById("fundraisingGoalRange").value = goalText;
		$('#goal').val(goalText);
	}

	function changeGoalText(){
		var goalSlider = document.getElementById("fundraisingGoalRange").value;

		$('#formatGoal').val(goalSlider + '.00').maskMoney('mask','1,999.99');
		$('#goal').val(goalSlider);
	}
</script>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
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
		</div>
	</div>
</div>
@endsection