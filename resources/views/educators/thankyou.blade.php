@extends('layouts.app')

@section('content')
<style>
    table{
        width:100%;
    }
    td, th {
        text-align:left;
        padding:8px;
    }
    th{
        background-color: #5cb85c;
    }
    tr:nth-child(even) {
        background-color:#f2f2f2;
    }

</style>

    <div class="container">
        <div class="row">
            <h3 class="text-center">Thank you for registering as an Educator! We will contact you soon</h3>
        </div>
    </div>
@endsection