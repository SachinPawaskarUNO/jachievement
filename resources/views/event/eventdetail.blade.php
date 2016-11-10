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
			
            <h2 class="text-center" id="pageHeading" >Bowling Classic</h2>
            <br>
			<div class="row" id="div-row">
				<div class="col-md-4" id="eventImage"> 
					<img src="http://nebula.wsimg.com/4da4544b93841f3d4cad23fa034e3b9a?AccessKeyId=388728B8D19B522E4A80&disposition=0&alloworigin=1" width="100%", height="auto"/>
					
					<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Contact</h4>
					<p class="text-justify" style="font-size: 18px; line-height: 1.4em;">John Healey</p>
					
					<span class="glyphicon glyphicon-earphone"></span> 
					<p class="text-justify" style="font-size: 16px; line-height: 1.4em;"> 402-333-6410</p> 
					
					<span class="glyphicon glyphicon-envelope"></span>
					<a href="mailto:healey@jaomaha.net" style="font-size: 16px;"> healey@jaomaha.net</a>
					
					<br>
				</div>
				<div class="col-md-8" id="eventInfo"> 
					<div id="map"></div>
					
					<div class="allDesc collapse in" id="eventDesc">
						<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Description</h4>
						<p class="text-justify" style="font-size: 16px; line-height: 1.4em;">
							Bowling Classic is a special event targeted to reach individual contributors for Junior Achievement. Teams of five individuals secure pledges based on per pin or a set amount and bowl two games during a specific time.  Each bowler is asked to raise $110 in pledges. Bowlers receive gift certificates based on the money raised. Many companies view this as a fun, team building experience for employees for a worthwhile organization. Each board member is asked to identify an individual from their company to coordinate their teams. Ideally, the board member would also put together a team and bowl.
						</p> 
						<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Event Start Date</h4>
						<span class="glyphicon glyphicon-time"></span> 
						<p class="text-justify" style="font-size: 16px; line-height: 1.4em;">05/14/2016</p> 
						<h4 style=" color:green; margin-top:0px; margin-bottom:0px">Event Venue</h4>
						<span class="glyphicon glyphicon-map-marker"></span> 
						<p class="text-justify" style="font-size: 16px; line-height: 1.4em;">
							Mockingbird Lanes, South 96th & L, Omaha, Nebraska
						</p> 
						
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
        </div>
	</div>

@endsection
