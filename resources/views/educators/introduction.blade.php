@extends('layouts.app')

@section('content')

<style>
    
    .glyphicon{font-size:35px;
        float:left;
        
        margin-right:20px;

        color:green;}

    h4{


    margin-right: 20px;
    color:green;
    }

    .button {
        background-color: rgb( 0, 135, 81);
        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

</style>
    <div align="center">
		<a href= "{{ url('/educators/interestform') }}" class="btn btn-success btn-lg" ID="SignUp">Sign up as an Educator</a>
	</div>
	<br>
	<div class="container-fluid" ID="1" style="background-color:rgb(245,245,245)">
        <div class="container"  ID="2">
       
        <h2 class="text-center"  ID="3">BRING JUNIOR ACHIEVEMENT TO YOUR CLASSROOM!</h2>
        <br>
        <br>
            <div class="row"  ID="4">
                <div class="col-md-6"  ID="5">
                <img class="img-responsive" src="{{$contents['Top Picture']}}" alt="Educator" width="100%" height="auto"  ID="6"/>
                </div>
                <div class="col-md-6"  ID="7">
                
                <p style="font-size: 16px"  ID="8"> {{$contents['Top Description']}}</p>
                <br>
                <div>
                <div class="col-md-1"><span class="glyphicon glyphicon-education"  ID="9"></span> </div>
                <div class="col-md-11"  ID="10"><h4>IMPORTANCE OF STAYING IN SCHOOL</h4>
                <p style="font-size:16px"  > {{$contents['Importance']}}</p>
                <br></div>
                </div>

                <div>
                <div class="col-md-1"  ID="12"><span class="glyphicon glyphicon-globe"   ID="13"></span> </div>
                <div class="col-md-11"  ID="14"> <h4>PREPARATION FOR THE REAL WORLD</h4>
                <p style="font-size: 16px"> {{$contents['Preparation']}}</p>
                <br></div>
                </div>
                
                <div>
                <div class="col-md-1"  ID="15"><span class="glyphicon glyphicon-star-empty" ></span> </div>
                <div class="col-md-11"  ID="16"> <h4>EDUCATOR-RESPECTED AND RECOMMENDED</h4>
                <p style="font-size: 16px"  ID="17"> {{$contents['Recommended']}}</p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container-fluid" style="background-color:white"  ID="18">
    <br>
    <br>
		<div class="col-md-4"  ID="19"></div>
		<div class="col-md-4"  ID="20">
			<h4 class="text-center" ID="21"><strong> {{$contents['Sign Up']}}</strong></h4>
 
		</div>
		<div class="col-md-4" ID="24"></div>

	</div>
	<br>
	<br>


	<div class="container-fluid" ID="25" style="background-color:rgb(245,245,245)">
	
        <div class="container" ID="26">
        
			<h2 class="text-center" ID="27"> Watch the Video</h2>        
			<br>
			<div align:"center"  class="col-md-2 style="align: center" ID="28"></div>
			<div align:"center"  class="col-md-8 style="align: center" ID="29" >
				<div class="embed-responsive embed-responsive-16by9 text-center" ID="30" >
					<div class="video-embed" style="text-align:center" ID="31"> 
						<iframe allowfullscreen="" frameborder="0" height="100" src="{{$contents['Bottom Video']}}" width="300" ID="32">
						</iframe>
					</div>
				</div>
			</div>
			<div align:"center"  class="col-md-2 style="align: center" ID="33"></div>
                
        </div>
    </div>
    
@endsection
