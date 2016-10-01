@extends('layouts.app')

@section('content')

<style>
    
    .glyphicon{font-size:40px;
        float:left;
        
        margin-right:20px;

        color:green;}

    h4{


    margin-right: 20px;
    color:green;
    }


</style>
    <div class="container-fluid" style="background-color:rgb(245,245,245)">
        <div class="container">
        <br>
        <br>
        <br>
        <h2 class="text-center">BRING JUNIOR ACHIEVEMENT TO YOUR CLASSROOM!</h2>
        <br>
        <br>
            <div class="row" >
                <div class="col-md-6">
                <img class="img-responsive" alt="Educator with Junior Achievement" src="https://www.juniorachievement.org/documents/20009/1817412/about-ja.jpg" width="100%" height="auto"/>
                </div>
                <div class="col-md-6">
                
                <p style="font-size: 16px"> JA brings quality volunteers from the community into your classroom to deliver proven, hands-on programming on financial literacy, work readiness, and entrepreneurship that inspires students to understand the opportunities provided by education.</p>
                <br>
                <div>
                <div class="col-md-1"><span class="glyphicon glyphicon-star-empty" ></span> </div>
                <div class="col-md-11"><h4>IMPORTANCE OF STAYING IN SCHOOL</h4>
                <p style="font-size:16px"  > JA reinforces the value of an education. Evaluations conducted by an independent research firm showed that an average of eight out of 10 high school students reported that JA programs helped reinforce the importance of staying in school. In longitudinal studies, JA students were significantly more likely than their peers to believe that they would graduate from high school, pursue post-secondary education and graduate from college.</p>
                <br></div>
                </div>

                <div>
                <div class="col-md-1"><span class="glyphicon glyphicon-star-empty" ></span> </div>
                <div class="col-md-11"> <h4>PREPARATION FOR THE REAL WORLD</h4>
                <p style="font-size: 16px"> Ninety-five percent of teachers report that students who participate in JA have a better understanding of how the real world operates, and nine out of 10 teachers and volunteers agree that JA programs connect what is learned in the classroom to the outside world.</p>
                <br></div>
                </div>
                
                <div>
                <div class="col-md-1"><span class="glyphicon glyphicon-star-empty" ></span> </div>
                <div class="col-md-11"> <h4>EDUCATOR-RESPECTED AND RECOMMENDED</h4>
                <p style="font-size: 16px"> Ninety-six percent of teachers agreed or strongly agreed that they would recommend JA to a colleague or friend.</p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
<div class="container-fluid" style="background-color:white">
<div class="col-md-4" ></div>
<div class="col-md-4">
 <h4 class="text-center"><strong> Interesting, right? Would you like to have Junior Achievement in your classroom? Just reach out to your local Junior Achievement by signing-up at the below link.</strong></h4>
 <br>
 <h3 class="text-center"> <a href="/educators/interestform" id="EducatorSignUp">Please sign-up here! </a> </h3>
</div>
<div class="col-md-4"></div>
</div>

  <br>

<div class="container-fluid" style="background-color:rgb(245,245,245)">
        <div class="container">
        <br>
        <br>
        <br>
<h2 class="text-center"> Watch the Video</h2>        
        <br/>
        <div align:"center"  class="col-md-3 style="align: center" ></div>
            <div align:"center"  class="col-md-6 style="align: center" >
                <div class="embed-responsive embed-responsive-16by9 text-center" >
                    <div class="video-embed" style="text-align:center"> 
                      <iframe allowfullscreen="" frameborder="0" height="100" src="https://www.youtube.com/embed/XZLeBFNIUVo" width="300"></iframe>
                    </div>
                  </div>
                 <div align:"center"  class="col-md-3 style="align: center" ></div>
                </div>
            </div>
        </div>
    
@endsection
