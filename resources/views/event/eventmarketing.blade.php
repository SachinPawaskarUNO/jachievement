@extends('layouts.app')

@section('content')
	<div class="container-fluid"  style="background-color:rgb(245,245,245)" id="div-containerFluid">
		<div class="container" id="div-container">
			<h2 class="text-center" id="pageHeading" >OUR EVENTS</h2>
			<br>
			<h4 class="text-justify" id="pageDescription"><i>Junior Achievement hosts several signature events throughout the year to raise money to support our programs, as well as raise awareness about our mission.</i></h4>
			<br>
			@foreach($activeevents as $activeevent)
			<div class="row" id="div-row">
				<div class="col-md-3" id="eventImage">
					<img src="{{ $activeevent->image }}" width="100%", height="auto"/>
					<br>
					<br>
				</div>

				<div class="col-md-9" id="eventDesc">
					<h4 style=" color:green; margin-top:0px; margin-bottom:0px">
						{{$activeevent->name}}
					</h4>
					<br>
					<div class="allDesc collapse in">
						<p style="font-size: 16px;"><b>When:</b>&nbsp;{{$activeevent->event_date}}
						<!--<p class="text-justify" style="font-size: 16px; line-height: 1.4em;"></p> -->
						<br>
						<b>Where:</b>&nbsp; {{$activeevent->venue}}</p>
						<br>
					
					<a href= "{{ action('CampaignController@eventDetail', [$activeevent->id])}}" class="btn btn-success btn-lg" style="font-size: 14px" id="button-create_team"> Learn More </a>
					@if ($activeevent->name == 'Junior Achievement Omaha Golf Campaign - 2016')

						<a href= "{{action('CampaignController@createTeam', [$activeevent->id])  }}" class="btn btn-success btn-lg" style="font-size: 14px" id="button-create_team"> Register Now </a>

					@else
						<a href= "{{action('CampaignController@createTeam', [$activeevent->id])  }}" class="btn btn-success btn-lg" style="font-size: 14px" id="button-create_team"> Create Team </a>
					@endif

					</div>
				</div>
			</div>
			<br>
			@endforeach

		</div>
	</div>
@endsection