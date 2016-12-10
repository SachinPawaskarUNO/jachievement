@extends('layouts.app')
@section('content')
        
<style>
    .button {
        background-color: rgba(140,198,62,0.85);
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


<div align="center"><a href= "{{ url('/aboutus/map') }}" class="btn btn-success btn-lg">Local Schools with Junior Achievement</a></div>
</div>
<br>
<div class="container-fluid" style="background-color:rgb(245,245,245)">
    <div class="container">
        <div class="row">
            <br>
            <h2 class="text-center">JUNIOR ACHIEVEMENT'S PURPOSE AND VALUES</h2>
            <br>
            <div class="col-md-6">
                <img class="img-responsive" alt="JUNIOR ACHIEVEMENT'S PURPOSE AND VALUES" src="{{$contents['Top Picture']}}" width="100%" height="auto">
            </div>
            <div class="col-md-6">

                <p><b>{{$contents['Purpose']}}</b></p>
                <p><b>Who we are?</b></p>
                <p>Junior Achievement is the world's largest organization dedicated to giving children the knowledge and skills they need to own their economic success, plan for their future, and make smart academic and economic choices. Junior Achievement programs are delivered by business and community volunteers and provide relevant, hands-on experiences that give students from kindergarten through high school the knowledge and skills in financial literacy, work readiness and entrepreneurship. Founded in 1919, Junior Achievement has operated programs in Omaha since 1962.
                </p>
                <p><b>Core Values</b></p>
                <p><span class="glyphicon glyphicon-star"></span> {{$contents['Core Value 1']}}</p>
                <p><span class="glyphicon glyphicon-star"></span> {{$contents['Core Value 2']}}</p>
                <p><span class="glyphicon glyphicon-star"></span> {{$contents['Core Value 3']}}</p>
                <p><span class="glyphicon glyphicon-star"></span> {{$contents['Core Value 4']}}</p>
                <p><span class="glyphicon glyphicon-star"></span> {{$contents['Core Value 5']}}</p>
                <p><span class="glyphicon glyphicon-star"></span> {{$contents['Core Value 6']}}</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color:white;">
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="align-content: center; color: rgb(0, 135, 81)">
                <br>
            </div>
            <div class="col-md-2"></div>
        </div>
</div>


<div class="container-fluid" style="background-color: rgb(245,245,245)">
    <div class="row">
		<div class="col-md-6 col-md-offset-3" style="background-color: green">
        <h2 class="text-center" style="color: white">Junior Achievement Facts</h2>
		</div>
    </div>

    <div class="container">
        <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h4 class="text-center"><b>What Is Junior Achievement USA®?</b></h4>
                    <p class="text-left">{{$contents['What Is Junior Achievement USA']}}</p>
                </div>

                <div class="col-sm-6">
                    <br>
                    <h4 class="text-center"><b>Proven Success</b></h4>
                    <p class="text-left">{{$contents['Proven Success']}}</p>
                </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br>
                <h4 class="text-center"><b>Purpose</b></h4>
                <p class="text-left">{{$contents['Purpose']}}</p>
            </div>

            <div class="col-sm-6">
                <br>
                <h4 class="text-center"><b>Program Reach</b></h4>
                <p class="text-left">{{$contents['Program Reach']}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br>
                <h4 class="text-center"><b>A Brief History</b></h4>
                <p class="text-left">{{$contents['A Brief History']}}</p>
            </div>

            <div class="col-sm-6">
                <br>
                <h4 class="text-center"><b>Leadership</b></h4>
                <p class="text-left">{{$contents['Leadership']}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br>
                <h4 class="text-center"><b>Organization Overview</b></h4>
                <p class="text-left">{{$contents['Organization Overview']}}</p>
            </div>

            <div class="col-sm-6">
               <br>
               <h4 class="text-center"><b>Volunteers</b></h4>
               <p class="text-left">{{$contents['Volunteers']}}</p>
            </div>
        </div>
    </div>
</div>


</html>
@endsection

