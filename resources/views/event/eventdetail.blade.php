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
				<a class="btn btn-success btn-lg" style="font-size: 14px" id="button-create_team"> Register Now </a>
			@else
				<a href= "{{action('CampaignController@createTeam', [$detail->id])  }}" class="btn btn-success btn-lg" style="font-size: 14px" id="button-create_team"> Create Team </a>
			@endif
				</div>
				<div class="col-md-4" id="eventImage"> 
					<img src="{{$detail->image}}" width="100%", height="auto"/>
					<div class="col-md-12">
						<span style=" font-size: 18px; color:green; margin-top:0px; margin-bottom:0px">Contact :</span>
						<span style="font-size: 18px">John Healey</span>
					</div>
					<br>
					<span class="glyphicon glyphicon-earphone"></span> 
					<p class="text-justify" style="font-size: 18px"> {{$detail->phone}}</p> 
					<span class="glyphicon glyphicon-envelope"></span>
					<a href="mailto:healey@jaomaha.net" style="font-size: 18px"> {{$detail->email}}</a>
					
					<br>
				</div>
				<div class="col-md-8" id="eventInfo"> 
					
					<div class="allDesc collapse in" id="eventDesc">
						<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Description</h4>
						<p class="text-justify" style="font-size: 16px; line-height: 1.4em;">
							{{$detail->description}}
						</p> 
						<br>
						<div id="map">
							<div id="google-maps-canvas" style="height:100%; width:100%;">
							@if($detail->id == 2)
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Mockingbird+lanes,+south+96th+and+L,+Omaha,+Nebraska&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
							@elseif($detail->id == 1)
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=champions+run,+13800+eagle+run+drive,+Omaha,+Nebraska&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
							@endif
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<span class="glyphicon glyphicon-time"></span>
								<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Event Start Date</h4>
								<p class="text-justify" style="font-size: 16px; line-height: 1.4em;">{{$detail->event_date}}</p> 
							</div>
							<div class="col-md-8">
								<span class="glyphicon glyphicon-map-marker"></span> 
								<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Event Venue</h4>
								<p class="text-justify" style="font-size: 16px; line-height: 1.4em;">{{$detail->venue}}</p> 
							</div>
						</div>
						<!--<ul>
							<li>
								Event Start Date
								<span> 
									<i class="fa fa-clock-o"><i>
									05/14/2016 
								</span>
							</li>
							<li>
								Event Venue 
								<span> 
									<i class="fa fa-map-marker"><i>
									Mockingbird Lanes, South 96th and L, Omaha, Nebraska 
								</span>
							</li>
						</ul>-->
					</div>
				</div>
			</div>
			@endforeach
        </div>
	</div>

@endsection
