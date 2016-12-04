@extends('layouts.app')
@section('content')

    <style>
/*Styles for  buttons, grid views and the icons */
           .fa_custom {
            color: #9ACD40;
                   }
           .fa-4x     {
            font-size: 3.5em;
                   }

           .program-description {
            font-family: "Calibri Light";
            font-size: 18px;
            font-weight: 500;
            color: #6d6d6d;
            text-align: center;
            margin-left: 3%;
            margin-right: 3%;
            line-height:1.5;
                        }

           .program-title {
            font-family: Helvetica;
            font-size:14px;
            font-weight: 500;
                          }
           .btn {
            padding: 18px 18px;
            border: 0 none;
            font-weight: 300;
            font-size: 11pt;
            letter-spacing: 1px;
            text-transform: uppercase;
            }

           .btn-primary {
            background: #9ACD50;
            color: #ffffff;
            border-radius: 0%;
            }
            .btn-primary:hover,.btn-primary:focus, .btn-primary:active:focus {
            background: #4CBB17 !important;
            }

    </style>

    <div class="container-fluid" style="background-color:rgb(245,245,245)">
    <div class="container">
        <br>
        <br>
        <br>
        <h2 class="section-heading text-center"> WHICH WAY TO JUNIOR ACHIEVEMENT?</h2>
        <p style="color: #9d9d9d"  align="center">________________</p>
        <br>
        <br>
        <div class="row">

            <!-- Program 1 Donor.  -->

            <div class="col-sm-4">
                <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                    <div class="program">
                        <br>
                        <br>
                        <p align="center">
                            <span class="fa fa-lightbulb-o fa_custom fa-4x" data-animation="bounceIn"></span>
                        </p>
                        <div class="hidden-sm clear"> &nbsp;
                        </div>
                        <h4 class="program-title" align="center"> CORPORATE DONOR</h4>
                        <br>
                        <p class="program-description"> Your corporation can support the growing need for youth development by helping today's students with the critical skills and the character necessary to succeed in your 21st century workplace.</p>
                        <br>
                        <p class="program-description" align="center"> — OR —</p>
                        <br>
                        <h4 class="program-title" align="center"> INDIVIDUAL DONOR</h4>
                        <br>
                        <p class="program-description"> Not affiliated with a corporation partnered with Junior Achievement? You can make a donation directly to Junior Achievement of Midlands!</p>
                        <br>
                        <br>
                        <div class="closing-buttons" align="center" id="button-donate">
                            <a class="btn btn-lg btn-primary" href="{{ url('/donors') }}">Learn More</a>
                        </div>
                        <div class="hidden-sm clear"> &nbsp;
                        </div>
                        <div class="hidden-sm clear"> &nbsp;
                        </div>
                    </div>
                </div>
            </div>

                <!-- Program 2 Volunteer. -->

                <div class="col-sm-4">
                    <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                        <div class="program">
                            <br>
                            <br>
                            <p align="center">
                                <span class="fa fa-heart-o fa_custom fa-4x" data-animation="bounceIn"></span>
                            </p>
                            <br>
                            <h4 class="program-title" align="center"> CORPORATE VOLUNTEER</h4>
                            <br>
                            <p class="program-description"> By volunteering for Junior Achievement through your organization, you can be in the classroom during work hours and you can share your experience and inspire young people to pursue their dreams.</p>
                            <br>
                            <p class="program-description" align="center"> — OR —</p>
                            <br>
                            <h4 class="program-title" align="center"> INDIVIDUAL VOLUNTEER</h4>
                            <br>
                            <p class="program-description"> Not affiliated with a corporation partnered with Junior Achievement? You can volunteer directly with Junior Achievement of Midlands!</p>
                            <br>
                            <br>
                            <div class="closing-buttons" align="center" id="button-volunteer">
                                <a class="btn btn-lg btn-primary" href="{{ url('/volunteers/introduction') }}">Learn More</a>
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Program 3 Educator-->

            <div class="col-sm-4">
                <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                    <div class="program">
                        <br>
                        <br>
                        <p align="center"><span class="fa fa-graduation-cap fa_custom fa-4x" data-animation="bounceIn"></span>
                        </p>
                        <br>
                        <h4 class="program-title" align="center"> EDUCATOR</h4>
                        <br>
                        <p class="program-description"> Quality volunteers from the community come into your classroom to deliver proven, hands-on programming that inspires students to understand the opportunities provided by education.</p>
                        <br>
                        <p class="program-description" align="center"> — OR —</p>
                        <br>
                        <h4 class="program-title" align="center"> LEARN MORE ABOUT JUNIOR ACHIEVEMENT PROGRAMS</h4>
                        <br>
                        <p class="program-description"> Not an Educator? Find out how you can get Junior Achievement programs into your local community!</p>
                        <br>
                        <br>
                        <div class="closing-buttons" align="center" id="button-educator">
                            <a class="btn btn-lg btn-primary" href="{{ url('/educators/introduction') }}">Learn More</a>
                        </div>
                        <div class="hidden-sm clear"> &nbsp;</div>
                        <div class="hidden-sm clear"> &nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- Programs end here --> <div class="entry-links"> </div>

        </div>
        <br>
        <br>
    </div>
 </div>

@endsection