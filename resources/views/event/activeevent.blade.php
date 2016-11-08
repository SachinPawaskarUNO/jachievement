@extends('layouts.app')

@section('content')
	<div class="container-fluid"  style="background-color:rgb(245,245,245)" id="div-containerFluid">
		<div class="container" id="div-container">
			<h2 class="text-center" id="pageHeading" >OUR EVENTS</h2>
			<br>
			<h4 class="text-center" id="pageDescription" style="color:green">Junior Achievement hosts several signature events throughout the year to raise money to support our programs, as well as raise awareness about our mission.</h4>

			@foreach ($activeevents as $activeevent)


			<div class="row" id="div-row">

				<div class="col-md-4" id="eventImage">
					<img src="{{ $activeevent->image }}" width="100%", height="auto"/>
				</div>
				<div class="col-md-8" id="eventDesc" style="background-color: #3c763d">
					<h5 style="margin-top:0px; margin-bottom:0px">
						{{$activeevent->name}}
					</h5>
					<a class="btn btn-success btn-lg" style="font-size: 16px" id="button-create_team"> Learn More </a>
				</div>
			</div>
			<br>
			@endforeach

		</div>
	</div>
@endsection