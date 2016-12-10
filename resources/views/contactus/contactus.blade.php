@extends('layouts.app')

@section('content')
	<div class="container-fluid" style="background-color:rgb(245,245,245)">
    <div class="container">
	<br>
	<br>
	<h2 class="text-center"> Have Questions? </h2>
	<h4 class="text-center"> Please check out our Junior Achievement's <a href="{{ url('/faq/view') }}">FAQ</a>s Document</h4>
	
        <br>
        <br>
     @include('common.flash')
        <div class="row">
		
			<!-- Embed a google map with The Junior Achievement of Midlands Inc. Address -->
			
            <div class="col-md-6" >
               <div class="panel panel-default" > 
				    <!-- <div class="panel-heading"></div> -->
														                    
					<div class="panel-body" >
						<div style="height:500px;width:500px;max-width:100%;list-style:none; transition: none;overflow:hidden;">
							<div id="google-maps-canvas" style="height:100%; width:100%;">
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="{{$contents['Map Location']}}">
								</iframe>
							</div>

						</div>
					</div>
				</div> 
			</div>
			
			<!-- The Contact Us form module -->
			
			<div class="col-md-6" >
               	<div class="panel panel-default" > 
					<div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.8em;color:white;"><b> Contact Us </b></span></div>
					<div class="panel-body" style="background-color:rgb(245,245,245)">
						<div style= "height:455px;width:500px;max-width:100%;">

							{!! Form::open(['url' => '/contactus', 'class' => 'form-horizontal']) !!}
							
							@include('common.errors')
							@include ('contactus.partial')

							{!! Form::close() !!}
							
						 </div> 
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
							<th> {{$contents['Person 1 Name']}} </th> 
							<th> {{$contents['Person 1 Title']}} </th>
							<th> {{$contents['Person 1 Phone']}} </th>
						</tr>
						<tr>	
							<th> {{$contents['Person 2 Name']}} </th> 
							<th> {{$contents['Person 2 Title']}} </th>
							<th> {{$contents['Person 2 Phone']}} </th>
						</tr>
						<tr>
							<th> {{$contents['Person 3 Name']}} </th> 
							<th> {{$contents['Person 3 Title']}} </th>
							<th> {{$contents['Person 3 Phone']}} </th>
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