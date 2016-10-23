@extends('layouts.app')

@section('content')
 
	<div class="container-fluid"  style="background-color:rgb(245,245,245)"> 
		<div class="container">
			<br>
            <br>
            <h2 class="text-center" id="page heading" >ACTIVE CAMPAIGNS</h2>
            <br>
            <br>
			<div class="row">
				<div class="col-md-4 col-md-offset-2" style="font-size: 20px">The Bowling Campaign 2016</div>
				<div class="col-md-3 col-md-offset-1" style="font-size: 15px">January 01, 2016 &nbsp; to &nbsp; January 31, 2016</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-8">
					<p class="text-justify" style="font-size: 16px" > Is your company looking to partner with an organization that makes a difference in the lives of youth in your community? Junior Achievement provides programs that are delivered to students in the classroom or in a simulated community (depending on the location). JA programs are developed with a focus on several different critically needed areas; STEM, building Leadership Skills, Uplifting At-Risk Communities, Work Readiness and Soft Skills, Business Ethics, College Readiness, Career and Technical Education (CTE), Industry Focus (Manufacturing/Health), and Financial Literacy.</p>
					<br>
				</div>
				<div class="col-md-2"> </div>
			</div>
			<div class="row">
				<div class= "col-md-8 col-md-offset-5" style="font-size: 16px" id="button-create_team">
					<a class="btn btn-success btn-lg" style="font-size: 16px" href="{{ url('/campaign/team/create/1') }}"> Create Team </a>
				</div>
            </div>
			<br>
			<br>
		</div>
	</div> 

@endsection