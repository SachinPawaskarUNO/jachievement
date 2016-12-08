@extends('layouts.app')
@section('content')
<div class="container-fluid">
  


  <div class="container">
    <div class="text-center">
    
    <div class="container">
        <br>
        <br>
  <div class="row" >

      <div class="col-md-8" >
          <img alt='' id="IMG_1" src="{{$contents['Top Picture']}}">
      </div>


        <div class="col-md-4">
            <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                <div class="program">
                    <br>
                    <br>

                    <div class="hidden-sm clear"> &nbsp;
                    </div>
                    <br>
                    <p class="program-description"><strong id="STRONG_2">{{$contents['Top Description Box']}}</strong>  </p>

                    <br>

                    <div class="hidden-sm clear"> &nbsp;
                    </div>
                    <div class="hidden-sm clear"> &nbsp;
                    </div>
                </div>
            </div>
        </div>

    </div>

  </div>
   </div>
<br>
    <br>
    <br>
    <br>


  <div class="container">
  <br>
  <br>
    <div class="row" id="WHY_1">
      <div class="col-md-5" id="WHY_2">
        <h2 id="H2_6">Why Junior Achievement?</h2>
        <p id="P_7">{{$contents['Why JA? Description']}}</p>
        <ul id="UL_8">
          <li id="LI_9">{{$contents['Why JA? Fact 1']}}</li>
          <li id="LI_10">{{$contents['Why JA? Fact 2']}}</li>
          <li id="LI_11">{{$contents['Why JA? Fact 3']}}</li>
          <li id="LI_12">{{$contents['Why JA? Fact 4']}}</li>
        </ul>
      </div>
      <div class="col-md-7" id="WHY_3">
        <img alt='' id="IMG_1" src="{{$contents['Why JA? Picture']}}">
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
          <iframe allowfullscreen="" frameborder="0" height="100" src="{{$contents['Video']}}" width="300"></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-3 style="></div>
  </div>

</div>
@endsection