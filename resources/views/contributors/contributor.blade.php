@extends('layouts.app')

@section('content')

    <style>

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
            color: green;
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
                         src="{{$contents['Top Picture']}}" width="100%"
                         height="auto" ID="6"/>
                </div>
                <div class="col-md-6" ID="7">

                    <p style="font-size: 16px" ID="8"> {{$contents['Top Description']}}</p>

                    <div>
                        <div class="col-md-1"><span class="glyphicon glyphicon-gift" ID="9"></span></div>
                        <div class="col-md-11" ID="10"><h4>YOUR DONATION HELPS JUNIOR ACHIEVEMENT REACH STUDENTS</h4>
                            <p style="font-size:16px"> {{$contents['Your Donation']}}</p>
                        </div>
                    </div>

                    <div>
                        <div class="col-md-1" ID="12"><span class="glyphicon glyphicon-grain" ID="13"></span></div>
                        <div class="col-md-11" ID="14"><h4>JUNIOR ACHIEVEMENT WILL HELP PREPARE YOUR FUTURE
                                WORKFORCE</h4>
                            <p style="font-size: 16px"> {{$contents['Workforce']}}</p>
                        </div>
                    </div>

                    <div>
                        <div class="col-md-1" ID="15"><span class="glyphicon glyphicon-heart-empty"></span></div>
                        <div class="col-md-11" ID="16"><h4>JUNIOR ACHIEVEMENT PROVIDES AN ENRICHING VOLUNTEER EXPERIENCE
                                FOR YOUR EMPLOYEES</h4>
                            <p style="font-size: 16px" ID="17"> {{$contents['Employees']}} lives.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <br>
            <div class="row">

                <!-- Program 1 Donor.  -->
                <h2 class="text-center" ID="3">Donate</h2>
                <p style="color: #9d9d9d"  align="center">________________</p>
                <br>
                <div align="center">
                    <div class="donate-box">
                       
                            <br>
                            <br>
                            <p align="center">
                                <img src="{{url('images/ja-triangle.jpeg')}}" width="100" height="106"/>

                            </p>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <br>
                            <p class="program-description"> {{$contents['Donate Now']}}</p>
                            <br>
                            <br>
                            <div class="closing-buttons" align="center" id="button-donate">
                                <a class="btn btn-success btn-lg" href="{{ url('/donation/donate') }}">Donate Now</a>
                            </div>
                    </div>
                </div>
              
			  <div ID="26">

                    <h2 class="text-center" ID="27"> Watch the Video</h2>
                    <div class="video-box" ID="29">
                        <br>
                        <div class="embed-responsive embed-responsive-16by9 text-center" ID="30">
                            <div class="video-embed" style="text-align:center" ID="31">
                                <iframe allowfullscreen="" frameborder="0" height="200"
                                        src="{{$contents['Bottom Video']}}" width="350" ID="32"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection