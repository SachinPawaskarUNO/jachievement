@extends('layouts.app')
@section('content')
    <style> 
        .fa_custom {
            color: #9ACD40;
        }
        .fa-4x     {
            font-size: 3.5em;
        }
        .team-description {
            font-family: "Calibri Light";
            font-size: 20px;
            font-weight: 500;
            color: #1a1a1a;
            text-align: left;
            margin-left: 10%;
            margin-right: 7%;
            line-height:1.0;
            padding:0px;
        }
        .team-title {
            font-family: Helvetica;
            font-size:30px;
            font-weight: 500;
            margin-left: 10%;
            margin-right: 10%;
            padding:0px;
        }
        .btn {
            padding: 10px 10px;
            border: 0 none;
            font-weight: 800;
            font-size: 11pt;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin:13px;
        }
        .btn-primary {
            background: #9ACD50;
            color: #ffffff;
            border-radius: 0%;
        }
        .btn-primary:hover,.btn-primary:focus, .btn-primary:active:focus {
            background: #4CBB17 !important;
        }
        /*underline the heading*/
        h3 {
            text-decoration:underline;
            padding:0px;
        }
        h2{
            padding:0px;
        }
        /*style for table*/
        table{
            border: 1px solid darkgrey;
             width: 100%;
            margin-left: 0%;
            margin-right: 0%;
        }
        th{
            background-color: #4CAF50;
             color: white;
            height: 50px;
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        td{
            height: 50px;
            vertical-align: bottom;
             padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        /*style for thermometer*/
        body {
            font-family: Helvetica;
        }

        .donation-meter {
            margin-left: 30px;
            width: 100px;
        }
        .glass {
            background: #b3b3b3;
            border-radius: 100px 100px 0 0;
            display: block;
            height: 300px;
            margin: 0 35px 10px;
            padding: 5px;
            position: relative;
            width: 20px;
        }
        .amount {
            background: #ffe44d;
            border-radius: 100px;
            display: block;
            width: 20px;
            position: absolute;
            bottom: 5px;
        }
        strong { display: block; text-align: center; }
        .goal {
            font-size: 30px;
        }
        .total {
            font-size: 16px;
            position: absolute;
            right: 35px;
        }
        .bulb {
            background: #ffe44d;
            border-radius: 100px;
            display: block;
            height: 50px;
            margin: 0 35px 10px;
            padding: 5px;
            position: relative;
            top: -20px;
            right: 15px;
            width: 50px;
        }
        .red-circle {
            background: #ffe44d;
            border-radius: 100px;
            display: block;
            height: 50px;
            width: 50px;
        }
        .filler {
            background: #ffe44d;
            border-radius: 100px 100px 0 0;
            display: block;
            height: 30px;
            width: 20px;
            position: relative;
            top: -65px;
            right: -15px;
            z-index: 30;
        }
    </style>
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-9" >
                <br>
                <h2 class="team-title text-center" id = "member_title">Welcome to My Junior Achievement Fundraiser</h2>
                <p style="color: #9d9d9d" align="center">_________________________________________________________</p>
                <p class="team-description" id="member_greeting">Hello everyone!</p>
                <p class="team-description" id="member_description">I am trying to raise $700 for golf tournnamamnt</p>
                <br>
                <div class="closing-buttons" align="center" id="button-donate">
                    <a class="btn btn-lg btn-primary" href="{{url('/campaign/team/join')}}" id="member_join">Join Our Team</a>
                    <a class="btn btn-lg btn-primary" href="{{ url('/donation/donate')}}" id="member_donate">Donate to my goal</a>
                </div>
                <div>
                    <p class="text-center" id="solicitationLink"> <a href="{{ url('') }}">Click here to send solicitation link. </a> </p>
                </div>
                <div align="center">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped cds-datatable">
                            <thead>
                            <th>Id</th><th>Name</th><th>Amount</th><th>Goal</th><th>% Raised</th>
                            </thead>
                            <tbody> <!-- Table Body -->
                            @foreach ($teamMembers as $teamMember)
                                <tr>
                                    <td class="table-text"><div></div></td>
                                    <td class="table-text"><div>{{ $teamMember->name }}</div></td>
                                    <td class="table-text"><div>{{ $teamMember->amount }}</div></td>
                                    <td class="table-text"><div>{{ $teamMember->goal }}</div></td>
                                    <td class="table-text"><div>{{ $teamMember->per_raised }}%</div></td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3" >
                <br>
                <br>
                <br>
                <div class="donation-meter">
                    <strong>My Goal</strong>
                    <strong class="goal">$700</strong>
                     <span class="glass">
                    <strong class="total" style="bottom: 30%">$275</strong>
                    <span class="amount" style="height: 30%"></span>
                    </span>
                    <div class="bulb">
                        <span class="red-circle"></span>
                        <span class="filler">
                        <span></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection