@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="404-error" style="height:300px">
            <img class="center-block" src="{{ url('images/ja_nav_logo.png') }}"/>
            <br>
            <div style="text-align:center">
            <h1>Sorry, we couldn't find that page.</h1>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection