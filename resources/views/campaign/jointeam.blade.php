@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></span></div>

				<div class="panel-body">
					@if ($action == 'join')
					{!! Form::open(['url' => '/event/team/join', 'class' => 'form-horizontal', 'method' => 'POST', 'id' => 'campaignForm']) !!}
					@else
					{!! Form::open(['url' => '/event/team/create', 'class' => 'form-horizontal', 'method' => 'POST', 'id' => 'campaignForm']) !!}
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

@section('scripts')
<script type="text/javascript">
	$(function() {
		$('#formatGoal').maskMoney();
	})

	$(function() {
		$('#personalFormatGoal').maskMoney();
	})

	function createAndJoin() {
		if(document.getElementById('createMember').checked) {
			$("#div1").show();
			$("#personalTitle").attr('required', 'required');
	    	$("#div2").show();
	    	$("#personalContent").attr('required', 'required');
	    	$("#div3").show();
	    	$("#personalFormatGoal").attr('required', 'required');
		} else {
			$("#div1").hide();
			$("#personalTitle").removeAttr('required', 'required');
	    	$("#div2").hide();
	    	$("#personalContent").removeAttr('required', 'required');
	    	$("#div3").hide();
	    	$("#personalFormatGoal").removeAttr('required', 'required');
		}
	}

	function changeGoalSlider(){
		var goalText = $('#formatGoal').maskMoney('unmasked')[0];

		document.getElementById("fundraisingGoalRange").value = goalText*1000;
		$('#goal').val(goalText*1000);
	}

	function changeGoalText(){
		var goalSlider = document.getElementById("fundraisingGoalRange").value;

		$('#formatGoal').val(goalSlider).maskMoney('mask','1,999');
		$('#goal').val(goalSlider);
	}

	function changePersonalGoalSlider(){
		var goalText = $('#personalFormatGoal').maskMoney('unmasked')[0];

		document.getElementById("personalFundraisingGoalRange").value = goalText*1000;
		$('#personalGoal').val(goalText*1000);
	}

	function changePersonalGoalText(){
		var goalSlider = document.getElementById("personalFundraisingGoalRange").value;

		$('#personalFormatGoal').val(goalSlider).maskMoney('mask','1,999');
		$('#personalGoal').val(goalSlider);
	}
</script>
@endsection