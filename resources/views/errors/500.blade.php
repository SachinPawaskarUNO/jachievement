@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="403-error" style="height:300px">
                <img class="center-block" src="{{ url('images/ja_nav_logo.png') }}"/>
                <br>
                <div style="text-align:center">
                    <h1>Oh no! It looks like there's an internal server error.</h1>
                </div>
            </div>
        </div>
    </div>
@endsection