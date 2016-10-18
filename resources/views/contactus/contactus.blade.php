@extends('layouts.app')

@section('content')
	<div class="container-fluid" style="background-color:rgb(245,245,245)">
    <div class="container">
	<br>
	<br>
	<h2 class="text-center"> Have quick questions? </h2>
	<h4 class="text-center"> Please check out the <a href="">FAQ</a> section before contacting us </h4>
        <br>
        <br>
        <div class="row">
		
			<!-- Embed a google map with The Junior Achievement of Midlands Inc. Address -->
			
            <div class="col-md-6" >
               <div class="panel panel-default" > 
				    <!-- <div class="panel-heading"></div> -->
														                    
					<div class="panel-body" >
						<div style="height:500px;width:500px;max-width:100%;list-style:none; transition: none;overflow:hidden;">
							<div id="google-maps-canvas" style="height:100%; width:100%;">
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Junior+Achievement-Midlands,+West+Maple+Road,+Omaha,+NE,+United+States&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
								</iframe>
							</div>
							<!-- <a class="embedded-map-html" rel="nofollow" href="http://www.szablonypremium.pl" id="auth-map-data"></a> -->
							<!-- <style>#google-maps-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style> -->
						</div>
						<!-- <script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=5865c16f-539f-b234-9bc8-b67e9cc486a8&c=embedded-map-html&u=1475113584" defer="defer" async="async"></script> -->
					
					</div>
				</div> 
			</div>
			
			<!-- The Contact Us form module -->
			
			<div class="col-md-6" >
               	<div class="panel panel-default" > 
					<div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.8em;color:white;"><b> Contact Us </b></span></div>
					<div class="panel-body" style="background-color:rgb(245,245,245)">
						<!-- <div style= "height:455px;width:500px;max-width:100%;"> -->
							
							{!! Form::open(['url' => '/contactus', 'class' => 'form-horizontal']) !!}
							
							@include('common.errors')
							@include('common.flash')
							@include ('contactus.partial')

							{!! Form::close() !!}
							
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
		
		<br><br><br>
		
		<!-- The Prefer to Call Module -->
		
		<div class="row">				
            <div class="col-md-2"> </div>
			<div class="col-md-8">        
				<h2 class='text-center'> Prefer to Call? </h2>
				<br><br>
				<div class ="table-responsive">
					<table class="table">
						<tr>
							<th> John Healey </th> 
							<th> President </th>
							<th> 402-333-6410 x 203 </th>
						</tr>
						<tr>	
							<th> Roxanne Mulvey </th> 
							<th> Elementary School Programs </th>
							<th> 402-333-6410 x 202 </th>
						</tr>
						<tr>
							<th> Jamie Hermanson </th> 
							<th> Middle/High School Programs </th>
							<th> 402-333-6410 x 201 </th>
						</tr>
						<tr>
							<th> </th> 
							<th> </th> 
							<th> </th> 
						</tr>
					</table>
				</div>			
			</div>
			<div class="col-md-2"> </div>
		</div>
    </div>
@endsection