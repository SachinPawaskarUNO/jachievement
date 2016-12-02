@extends('layouts.app')

@section('content')

    <style xmlns:align="http://www.w3.org/1999/xhtml">

        .glyphicon {
            font-size: 30px;
            float: left;
            margin-right: 20px;
            color: green;
        }

        h4 {
            margin-right: 20px;
            color: green;
        }

        .fa_custom {
            color: #9ACD40;
        }

        .fa-4x {
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
            line-height: 1.5;
        }

        .program-title {
            font-family: Helvetica;
            font-size: 14px;
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

        .btn-primary:hover, .btn-primary:focus, .btn-primary:active:focus {
            background: #4CBB17 !important;
        }

        .donate-box {
            background-color: rgb(255, 255, 255);
            height: 420px;
            width: 50%;
        }

        .video-box {

            display: block;
            margin: auto;
            width: 60%;
        }

    </style>

    <div class="container-fluid" ID="1" style="background-color:rgb(245,245,245)">
        <div class="container" ID="2">
            <br>
            <br>
            <h2 class="text-center" ID="3">PARTNERING WITH JUNIOR ACHIEVEMENT</h2>
            <br>
            <br>
            <div class="row" ID="4">
                <div class="col-md-6" ID="5">
                    <img class="img-responsive" alt="Educator with Junior Achievement"
                         src="https://www.juniorachievement.org/documents/20009/1817412/about-pg.png" width="100%"
                         height="auto" ID="6"/>
                </div>
                <div class="col-md-6" ID="7">

                    <p style="font-size: 16px" ID="8"> Is your company looking to partner with an organization that
                        makes a difference in the lives of youth in your community? Junior Achievement provides programs
                        that are delivered to students in the classroom. Junior Achievement programs are developed with a focus on several
                        critically needed areas; STEM, Building Leadership Skills, Uplifting At-Risk Communities, Work
                        Readiness and Soft Skills, Business Ethics, College Readiness, Career and Technical Education
                        (CTE), Industry Focus (Manufacturing/Health), and Financial Literacy.</p>

                    <div>
                        <div class="col-md-1"><span class="glyphicon glyphicon-gift" ID="9"></span></div>
                        <div class="col-md-11" ID="10"><h4>YOUR DONATION HELPS JUNIOR ACHIEVEMENT REACH STUDENTS</h4>
                            <p style="font-size:16px"> Junior Achievement inspires and prepares young people to succeed
                                in the global economy. By partnering with Junior Achievement, you will empower young
                                people to own their economic success.</p>
                        </div>
                    </div>

                    <div>
                        <div class="col-md-1" ID="12"><span class="glyphicon glyphicon-grain" ID="13"></span></div>
                        <div class="col-md-11" ID="14"><h4>JUNIOR ACHIEVEMENT WILL HELP PREPARE YOUR FUTURE
                                WORKFORCE</h4>
                            <p style="font-size: 16px"> Junior Achievement will help you develop leaders with the
                                critical skills and the character necessary to succeed in our 21st century
                                workplace.</p>
                        </div>
                    </div>

                    <div>
                        <div class="col-md-1" ID="15"><span class="glyphicon glyphicon-heart-empty"></span></div>
                        <div class="col-md-11" ID="16"><h4>JUNIOR ACHIEVEMENT PROVIDES AN ENRICHING VOLUNTEER EXPERIENCE
                                FOR YOUR EMPLOYEES</h4>
                            <p style="font-size: 16px" ID="17"> Junior Achievement will empower your employees with
                                quality, skills-based volunteering experiences in our community using proven programs
                                that change young peoples' lives.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <br>
            <div class="row">

                <!-- Program 1 Donor.  -->
                <h2 class="text-center" ID="3">Donate</h2>
                <br>
                <div align="center">
                    <div width="300px" height="50px" align="center" class="donate-box">
                        <div class="program">
                            <br>
                            <br>
                            <p align="center">
                                <span class="fa fa-lightbulb-o fa_custom fa-4x" data-animation="bounceIn"></span>
                            </p>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <br>
                            <p class="program-description"> Every single dollar makes a difference. Donating to Junior
                                Achievement will help to expand Junior Achievement's enriching curriculum to benefit
                                more students.</p>
                            <br>
                            <br>
                            <div class="closing-buttons" align="center" id="button-donate">
                                <a class="btn btn-lg btn-primary" href="{{ url('/donation/donate') }}">Donate Now</a>
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <div ID="26">

                    <h2 class="text-center" ID="27"> Watch the Video</h2>
                    <div class="video-box" ID="29">
                        <br>
                        <div class="embed-responsive embed-responsive-16by9 text-center" ID="30">
                            <div class="video-embed" style="text-align:center" ID="31">
                                <iframe allowfullscreen="" frameborder="0" height="200"
                                        src="https://www.youtube.com/embed/nTmryDIQq6s" width="350" ID="32"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection