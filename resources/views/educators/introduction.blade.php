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
                <img class="img-responsive" src="../images/EducatorsPage.jpg" alt="Educator" width="100%" height="auto"  ID="6"/>
                </div>
                <div class="col-md-6"  ID="7">
                
                <p style="font-size: 16px"  ID="8"> Junior Achievement brings quality volunteers from the community into your classroom to deliver proven, hands-on programming on financial literacy, work readiness, and entrepreneurship that inspires students to understand the opportunities provided by education.</p>
                <br>
                <div>
                <div class="col-md-1"><span class="glyphicon glyphicon-education"  ID="9"></span> </div>
                <div class="col-md-11"  ID="10"><h4>IMPORTANCE OF STAYING IN SCHOOL</h4>
                <p style="font-size:16px"  > Junior Achievement reinforces the value of an education. Evaluations conducted by an independent research firm showed that an average of eight out of 10 high school students reported that Junior Achievement programs helped reinforce the importance of staying in school. In longitudinal studies, Junior Achievement students were significantly more likely than their peers to believe that they would graduate from high school, pursue post-secondary education and graduate from college.</p>
                <br></div>
                </div>

                <div>
                <div class="col-md-1"  ID="12"><span class="glyphicon glyphicon-globe"   ID="13"></span> </div>
                <div class="col-md-11"  ID="14"> <h4>PREPARATION FOR THE REAL WORLD</h4>
                <p style="font-size: 16px"> Ninety-five percent of teachers report that students who participate in Junior Achievement have a better understanding of how the real world operates, and nine out of 10 teachers and volunteers agree that Junior Achievement programs connect what is learned in the classroom to the outside world.</p>
                <br></div>
                </div>
                
                <div>
                <div class="col-md-1"  ID="15"><span class="glyphicon glyphicon-star-empty" ></span> </div>
                <div class="col-md-11"  ID="16"> <h4>EDUCATOR-RESPECTED AND RECOMMENDED</h4>
                <p style="font-size: 16px"  ID="17"> Ninety-six percent of teachers agreed or strongly agreed that they would recommend Junior Achievement to a colleague or friend.</p>
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
			<h4 class="text-center" ID="21"><strong> Interesting, right? Would you like to have Junior Achievement in your classroom? Just reach out to Junior Achievement of Midlands to sign up.</strong></h4>
 
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
						<iframe allowfullscreen="" frameborder="0" height="100" src="https://www.youtube.com/embed/XZLeBFNIUVo" width="300" ID="32">
						</iframe>
					</div>
				</div>
			</div>
			<div align:"center"  class="col-md-2 style="align: center" ID="33"></div>
                
        </div>
    </div>
    
@endsection
