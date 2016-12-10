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

    }

    </style>
	<div align="center">
		<a href= "{{ url('/volunteers/interestform') }}" class="btn btn-success btn-lg" ID="SignUP">Sign up as a Volunteer</a>
	</div>
	<br>
    <div class="container-fluid" ID="1" style="background-color:rgb(245,245,245)">
        <div class="container" ID="2">
          
            <h2 class="text-center" ID="3"> VOLUNTEERING WITH JUNIOR ACHIEVEMENT</h2>
            <br>
            <br>
            <div class="row" ID="4">
                <div class="col-md-6"  ID="5">
                    <img class="img-responsive" alt="Volunteering with Junior Achievement" src="{{$contents['Top Picture']}}" width="100%" height="auto"  ID="6"/>
                </div>
                <div class="col-md-6" ID="7">


                    <p style="font-size: 16px" ID="8"> {{$contents['Top Description']}}</p>

                    <br>
                    <div>
                        <div class="col-md-1"><span class="glyphicon glyphicon-home" ID="9"></span></div>
                        <div class="col-md-11"  ID="10"><h4>MAKE A DIFFERENCE IN YOUR COMMUNITY</h4>
                            <p style="font-size: 16px"> {{$contents['Make A Difference']}}</p>
                            <br></div>
                    </div>



                    <div>
                        <div class="col-md-1"  ID="12"><span class="glyphicon glyphicon-thumbs-up" ID="13"></span> </div>
                        <div class="col-md-11"  ID="14"> <h4>INSPIRE A FUTURE GENERATION</h4>
                            <p style="font-size: 16px"> {{$contents['Inspire']}}</p>
                            <br></div>
                    </div>

                    <div>


                        <div class="col-md-1"  ID="15"><span class="glyphicon glyphicon-user"></span> </div>
                        <div class="col-md-11"  ID="16"> <h4>JUNIOR ACHIEVEMENT PROVIDES AN AMAZING AND REWARDING VOLUNTEER EXPERIENCE</h4>
                            <p style="font-size: 16px" ID="17"> {{$contents['Experience']}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color:white" ID="18">
        <br>
        <br>
        <div class="col-md-4" ID="19"></div>
        <div class="col-md-4" ID="20">
            <h4 class="text-center" ID="21"><strong> {{$contents['Sign Up']}}</strong></h4>
            
        </div>
        <div class="col-md-4" ID="24"></div>
    </div>

    <div class="container-fluid" ID="25" style="background-color:rgb(245,245,245)">
        <br>
        <div class="container" ID="26">
            <br>
            <h2 class="text-center" ID="27"> Watch the Video</h2>
            <br/>
			<div align:"center"  class="col-md-2 style="align: center" ID="28"></div>
			<div align:"center"  class="col-md-8 style="align: center" ID="29" >
				<div class="embed-responsive embed-responsive-16by9 text-center" ID="30" >
					<div class="video-embed" style="text-align:center" ID="31">
						<iframe allowfullscreen="" frameborder="0" height="100" src="{{$contents['Bottom Video']}}" width="300" ID="32"></iframe>
					</div>
				</div>
			</div>
			<div align:"center"  class="col-md-2 style="align: center" ID="33"></div>
		</div>
    </div>



@endsection








