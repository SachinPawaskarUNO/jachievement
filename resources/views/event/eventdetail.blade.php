@extends('layouts.app')

@section('content')
	<style>
        .glyphicon{
			font-size:20px;
            float:left;
            margin-right:20px;
            color:green;}
		
		.
    </style>
    <div class="container-fluid"  style="background-color:rgb(245,245,245)" id="div-containerFluid">
	
        <div class="container" id="div-container">
			
			@foreach($details as $detail)
            <h2 class="text-center" id="pageHeading" >{{$detail->name}}</h2>
			<br>
			<div class="row" id="div-row">
				<div class="col-md-12 col-md-offset-10"  id="button">
					@if ($detail->id == 1)
				<a href= "{{action('CampaignController@createTeam', [$detail->id])  }}" class="btn btn-success btn-lg" style="font-size: 14px" id="button-register_now"> Register Now </a>
			@else
				<a href= "{{action('CampaignController@createTeam', [$detail->id])  }}" class="btn btn-success btn-lg" style="font-size: 14px" id="button-create_team"> Create Team </a>
			@endif
				</div>
				<br>
				<div class="col-md-3" id="div-eventImage">
					<img src="{{$detail->image}}" width="280" height="240" id="image"/>
					<div id="div-contact">
						<span class style=" font-size: 18px; color:green; margin-top:0px; margin-bottom:0px" id="contact">Contact Us:</span>

						<br>
						<span class="glyphicon glyphicon-earphone" id="phoneIcon"></span>
						<p class="text-justify" style="font-size: 18px" id="phoneNumber"> {{$detail->phone}}</p>
						<span class="glyphicon glyphicon-envelope" id="mailIcon"></span>
						<a href="mailto:" style="font-size: 18px" id="emailAddress"> {{$detail->email}}</a>

						<br>
						<br>


					</div>

				</div>
				<div class="col-md-9" id="eventInfo">
					
					<div class="allDesc collapse in" id="eventDesc">
						<h4 style=" color:green; margin-top:0px; margin-bottom:0px" id="descHeading">Description</h4>
						<p class="text-justify" style="font-size: 16px; line-height: 1.4em;" id="desc">
							{{$detail->description}}
						</p> 
						<br>
						<div class="row" id="div-row_eventDesc">
							<div class="col-md-4" id="div-col-eventDate">
								<span class="glyphicon glyphicon-time" id="clockIcon"></span>
								<h4 style=" color:green; margin-top:0px; margin-bottom:0px" id="eventDateHeading">Event Date</h4>
								<p class="text-justify" style="font-size: 16px; line-height: 1.4em;" id="eventDate">{{date('F d, Y', strtotime($detail->event_date))}}</p> 
							</div>
							<div class="col-md-8" id="div-col-eventVenue">
								<span class="glyphicon glyphicon-map-marker" id="locationIcon"></span> 
								<h4 style=" color:green; margin-top:0px; margin-bottom:0px" id="eventVenueHeading">Event Venue</h4>
								<p class="text-justify" style="font-size: 16px; line-height: 1.4em;" id="eventVenue">{{$detail->venue}}</p> 
							</div>
						</div>
						<br>
						<div id="map">
							<div id="google-maps-canvas" style="height:100%; width:100%;" id="div-mapCondition">
							@if($detail->id == 2)
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Mockingbird+lanes,+south+96th+and+L,+Omaha,+Nebraska&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
							@elseif($detail->id == 1)
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=champions+run,+13800+eagle+run+drive,+Omaha,+Nebraska&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
							@endif
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
			@endforeach
        </div>
	</div>

@endsection
