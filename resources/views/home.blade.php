@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-0">
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

<div class="row">
  <div class="col-md-4 box"></div>
  <div class="col-md-4 box">
    <a href="{{ url('get_Involved') }}" id="A_1">Get Involved</a></div>
  <div class="col-md-4 box"></div>
</div>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <iframe allowfullscreen=""
                    frameborder="0" height="315" id="VID_1" name="VID_1" src=
                    "https://www.youtube.com/embed/4L49IjKV6po" width=
                    "560"></iframe></div>
  <div class="col-md-3"></div>
</div>

<div class="row" id="WHY_1">
  <div class="col-sm-6 col-xs-push-6">
                    <h2 id="H2_6">
                        Why Junior Achievement?
                    </h2>
                    <p id="P_7">
                        JA helps students realize that the education they are getting today will help them to have a bright future tomorrow. JA's unique, volunteer delivered programs, show them all of the possibilities that lay before them. They realize they can choose different paths; College? A specific trade? Start their own business? Through your participation as an organization or as an individual, these statistics below can begin to change in your community:
                    </p>
                    <ul id="UL_8">
                        <li id="LI_9">
                            20% of U.S. students will not complete high school on time and earn a diploma.
                        </li>
                        <li id="LI_10">
                            49% of U.S. employers recognize that talent shortages impact their ability to serve clients and customers.
                        </li>
                        <li id="LI_11">
                            36% of Americans say that they have at some point in their lives felt their financial situation was out of control.
                        </li>
                        <li id="LI_12">
                            91% of millennials wish they had greater access to entrepreneurial education programs.
                        </li>
                    </ul>

  </div>
  <div class="col-sm-6 col-xs-pull-6"><img alt='' id="IMG_1" src="images/two-cols-classroom.jpg"></div>
</div>
<!--
<div class="row">
  <div class="col-md-4 box"></div>
  <div class="col-md-4 box">
    <a href="https://www.youtube.com/channel/UCgMAAachC-yG8p8r06S938A"><i class="fa fa-youtube fa-6"></i></a>
  </div>
  <div class="col-md-4 box">
    <a href="https://www.facebook.com/JuniorAchievementUSA/"><i class="fa fa-facebook fa-6"></a>
  </div>
  <div class="col-md-4 box"></div>
</div>
-->
</div>


@endsection

