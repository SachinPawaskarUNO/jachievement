@extends('layouts.app')

@section('content')
 
	<div class="container-fluid"  style="background-color:rgb(245,245,245)" id="div-containerFluid"> 
		<div class="container" id="div-container">
			<br>
            <br>
            <h2 class="text-center" id="page heading" >ACTIVE CAMPAIGNS</h2>
            <br>
            <br>
			@foreach ($activecampaigns as $activecampaign)
			<div class="row" id="div-row1">
				<div class="col-md-4 col-md-offset-2" style="font-size: 20px" id="div-col-campaign_name">{{ $activecampaign->name }}</div>
				<div class="col-md-3 col-md-offset-1" style="font-size: 15px" id="div-col-campaign_dates">{{ $activecampaign->start_date }} &nbsp; to &nbsp; {{ $activecampaign->end_date }}</div>
			</div>
			<br>
			<br>
			<div class="row" id="div-row2">
				<div class="col-md-2"> </div>
				<div class="col-md-8">
					<p class="text-justify" style="font-size: 16px" id="div-col-campaign_description"> {{ $activecampaign->description }}</p>
					<br>
				</div>
				<div class="col-md-2"> </div>
			</div>
			<div class="row" id="div-row3">
				<div class= "col-md-8 col-md-offset-5" style="font-size: 16px" id="div-col-create_team">
					<a class="btn btn-success btn-lg" style="font-size: 16px" href="{{ action('CampaignController@createTeam', [$activecampaign->id]) }}" id="button-create_team"> Create Team </a>
				</div>
            </div>
			<br>
			<br>
			@endforeach
		</div>
	</div> 

@endsection