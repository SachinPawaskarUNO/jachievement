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
                    <img class="img-responsive" alt="Volunteering with Junior Achievement" src="https://www.juniorachievement.org/documents/20009/1817412/volunteer-ja-crop.jpg" width="100%" height="auto"  ID="6"/>
                </div>
                <div class="col-md-6" ID="7">


                    <p style="font-size: 16px" ID="8"> A want versus a need. How to balance a checkbook. Don't you wish that someone had taught you those things as you were growing up? Now there is someone. YOU. All we need is your enthusiasm, life experience, and a willingness to teach children about how you took chances and shoot for the stars. Junior Achievement provides the training, curriculum, and a classroom ready to meet you!</p>

                    <br>
                    <div>
                        <div class="col-md-1"><span class="glyphicon glyphicon-home" ID="9"></span></div>
                        <div class="col-md-11"  ID="10"><h4>MAKE A DIFFERENCE IN YOUR COMMUNITY</h4>
                            <p style="font-size: 16px"> By being a Junior Achievement volunteer and sharing your personal and professional experiences and skills with students from our community, you help them make the connection between what they are learning in school and what they will need to succeed in work and life.</p>
                            <br></div>
                    </div>



                    <div>
                        <div class="col-md-1"  ID="12"><span class="glyphicon glyphicon-thumbs-up" ID="13"></span> </div>
                        <div class="col-md-11"  ID="14"> <h4>INSPIRE A FUTURE GENERATION</h4>
                            <p style="font-size: 16px"> For a time investment of only an hour a week, you may be the difference between a young person just making ends meet or getting a more fulfilling career and life.</p>
                            <br></div>
                    </div>

                    <div>


                        <div class="col-md-1"  ID="15"><span class="glyphicon glyphicon-user"></span> </div>
                        <div class="col-md-11"  ID="16"> <h4>JUNIOR ACHIEVEMENT PROVIDES AN AMAZING AND REWARDING VOLUNTEER EXPERIENCE</h4>
                            <p style="font-size: 16px" ID="17"> Junior Achievement gives you an opportunity through your employer's volunteer program (or on your own) to impact young people in our community in a positive way with simple to implement programs on financial literacy, work readiness, and entrepreneurship. This will empower young people to own their economic success.</p>
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
            <h4 class="text-center" ID="21"><strong> Interesting, right? Would you like to engage with Junior Achievement? Just reach out to Junior Achievement of Midlands to sign up.</strong></h4>
            
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
						<iframe allowfullscreen="" frameborder="0" height="100" src="https://www.youtube.com/embed/HNUpbr7NeL0" width="300" ID="32"></iframe>
					</div>
				</div>
			</div>
			<div align:"center"  class="col-md-2 style="align: center" ID="33"></div>
		</div>
    </div>



@endsection








