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
            background-color: #9ACD50;
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
            background: #9ACD50;
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
            background: #9ACD50;
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
            background: #9ACD50;
            border-radius: 100px;
            display: block;
            height: 50px;
            width: 50px;
        }
        .filler {
            background: #9ACD50;
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
                @include('common.errors')
                @include('common.flash')
                <div class="panel panel-default">
                    <h2 class="team-title text-center" id = "member_title">{{$teamMember->title}}</h2>
                    <p style="color: #9d9d9d" align="center">_________________________________________________________</p>
                    <p id="P_1">{{$teamMember->content}}</p>
                </div>
                <br>
                <br>
                <div class="closing-buttons" align="center" id="button-donate">
                    <a class="btn btn-lg btn-primary" href="{{ action('CampaignController@joinTeam', [$teamMember->team_id]) }}" id="member_join">Join My Team</a>
                    <a class="btn btn-lg btn-primary" href="{{ url('/donation/donate')}}" id="member_donate">Donate to my goal</a>
                </div>
                <div>
                    <p class="text-center" id="solicitationLink"> <a href="{{ url('') }}">Click here to send solicitation link. </a> </p>
                </div>
                <br>
                <br>
                <p class="text-center">Team Members</p>
                <div align="center">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped cds-datatable">
                            <thead>
                            <th>Id</th><th>Name</th><th>Goal</th><th>Total Donated Amount</th><th>% Raised</th>
                            </thead>
                            <tbody> <!-- Table Body -->
                            @foreach ($teamMembers as $teamMember)
                                <tr>
                                    <td class="table-text"><div></div></td>
                                    <td class="table-text"><div><a href="{{action('CampaignController@teammember', [$teamMember->id])}}">{{ $teamMember->name }}</a></div></td>
                                    <td class="table-text">
                                        <div>
                                            @if($teamMember->goal != null)
                                                ${{ $teamMember->goal }}
                                            @else
                                                $0
                                            @endif
                                        </div>
                                    </td>
                                    <td class="table-text">
                                        <div>
                                            @if($teamMember->amount != null)
                                                ${{ $teamMember->amount }}
                                            @else
                                                $0
                                            @endif
                                        </div>
                                    </td>
                                    <td class="table-text">
                                        <div>
                                            @if($teamMember->per_raised != null)
                                                {{ $teamMember->per_raised }}%
                                            @else
                                                0%
                                            @endif
                                        </div>
                                    </td>
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
                    <strong class="goal">${{$teamMember->goal}}</strong>
                     <span class="glass">
                    <strong class="total" style="bottom: 30%">$100
                    </strong>
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