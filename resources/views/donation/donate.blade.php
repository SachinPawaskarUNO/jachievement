@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-6-pull">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.2em;"><b> "Donation to Junior Achievement Omaha"</b></span></div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/donation/donate', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                        @include('common.errors')
                        @include('common.flash')
                        @include ('donation.partial')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6-push">
                <div class="row">
                    <h3 class="text-center">Top 5 Contributors</h3>
                    <ol class="list-group">
                        <!-- <li class="list-group-item">John Wick: $500</li>
                        <li class="list-group-item">Steve Trevor: $250</li>
                        <li class="list-group-item">Felicity Smoak: $200</li>
                        <li class="list-group-item">Steve Bob: $100</li>
                        <li class="list-group-item">Thea Quinn: $50</li>
 -->
      
        <div style="margin-left:20px;">
            <div>
               @foreach($donors as $donor)
                <div class="col-md-6">
                    {{$donor->firstName}}
                    {{$donor->lastName}}

                </div>
                  @endforeach
            </div>
        </div>
      

                    </ol>

                </div>
                <div class="row container">
                    <img class="img-responsive" id="IMG" alt="Beatiful Image" src="images/two-cols-classroom.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection