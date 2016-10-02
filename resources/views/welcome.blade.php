@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="container">
    <div class="text-center">
      <div class="panel panel-default">
        <p id="P_1">JA's volunteer-delivered, kindergarten-12th
                    grade programs foster <strong id="STRONG_2">work-readiness,
                    entrepreneurship</strong> and <strong id=
                    "STRONG_3">financial literacy skills,</strong> and use
                    experiential learning to inspire students to dream big and
                    reach their potential.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <br>
    <br>
    <div class="text-center">
      <a href="{{url('/get_Involved/getinvolved')}}" id="A_1">Get Involved</a>
    </div>
  </div>
  <div class="container">
  <br>
  <br>
    <div class="row" id="WHY_1">
      <div class="col-md-6" id="WHY_2">
        <h2 id="H2_6">Why Junior Achievement?</h2>
        <p id="P_7">JA helps students realize that the
                        education they are getting today will help them to have
                        a bright future tomorrow. JA's unique, volunteer
                        delivered programs, show them all of the possibilities
                        that lay before them. They realize they can choose
                        different paths; College? A specific trade? Start their
                        own business? Through your participation as an
                        organization or as an individual, these statistics
                        below can begin to change in your community:</p>
        <ul id="UL_8">
          <li id="LI_9">20% of U.S. students will not complete high school on time and earn a diploma.</li>
          <li id="LI_10">49% of U.S. employers recognize that talent shortages impact their ability to serve clients and customers.</li>
          <li id="LI_11">36% of Americans say that they have at some point in their lives felt their financial situation was out of control.</li>
          <li id="LI_12">91% of millennials wish they had greater access to entrepreneurial education programs.</li>
        </ul>
      </div>
      <div class="col-md-6" id="WHY_3">
        <img alt='' id="IMG_1" src="images/two-cols-classroom_sm.jpg">
      </div>
      </div>
  </div>
  <br>
  <br>
  <br>
  <div class="container">
    <br>
    <div class="col-md-3 style="></div>
    <div class="col-md-6 style=">
      <div class="embed-responsive embed-responsive-16by9 text-center">
        <div class="video-embed" style="text-align:center">
          <iframe allowfullscreen="" frameborder="0" height="100" src="https://www.youtube.com/embed/4L49IjKV6po" width="300"></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-3 style="></div>
  </div>
  <div class="container">
    <br>
    <br>
  </div>
    <div class="container">
      <br>
      <br>
      <div class="text-center">
        <a href="https://www.youtube.com/watch?v=4L49IjKV6po"><i class="fa fa-youtube fa-5x" aria-hidden="true"></i></a>
      <a href="https://www.facebook.com/pages/Junior-Achievement-of-The-Midlands/100873483290685"><i class="fa fa-facebook fa-5x" aria-hidden="true"></i></a>
    </div>
  </div>
    <div class="container">
      <div class="text-center">
        <p id="P_2" style="margin: 10px 0;">© Junior Achievement USA<sup>®</sup>&nbsp;/&nbsp;13506 West Maple Road,&nbsp;Omaha&nbsp;NE&nbsp;68164&nbsp;/&nbsp;Phone:&nbsp;402-333-6410&nbsp;/&nbsp;Fax:&nbsp;402-333-6797</p>
    </div>
  </div>

</div>
@endsection
