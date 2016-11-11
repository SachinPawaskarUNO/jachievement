@extends('layouts.app')

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

		document.getElementById("fundraisingGoalRange").value = goalText;
		$('#goal').val(goalText);
	}

	function changeGoalText(){
		var goalSlider = document.getElementById("fundraisingGoalRange").value;

		$('#formatGoal').val(goalSlider + '.00').maskMoney('mask','1,999.99');
		$('#goal').val(goalSlider);
	}

	function changePersonalGoalSlider(){
		var goalText = $('#personalFormatGoal').maskMoney('unmasked')[0];

		document.getElementById("personalFundraisingGoalRange").value = goalText;
		$('#personalGoal').val(goalText);
	}

	function changePersonalGoalText(){
		var goalSlider = document.getElementById("personalFundraisingGoalRange").value;

		$('#personalFormatGoal').val(goalSlider + '.00').maskMoney('mask','1,999.99');
		$('#personalGoal').val(goalSlider);
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