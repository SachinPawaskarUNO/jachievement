@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-6-pull">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.2em;"><b> {{ $heading }}</b></span></div>
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
                        <li class="list-group-item">1. John Smith: $500</li>
                        <li class="list-group-item">2. Steve Trevor: $250</li>
                        <li class="list-group-item">3. Felicity Smoak: $200</li>
                        <li class="list-group-item">4. Steve Bob: $100</li>
                        <li class="list-group-item">5. Thea Quinn: $50</li>
                    </ol>
                </div>
                <div class="row">
                    <img class="img-responsive" id="IMG" alt="Image" src="images/rochester2016.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection