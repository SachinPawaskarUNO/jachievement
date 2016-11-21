@extends('layouts.app')
@section('content')
    <script type="text/javascript" src="{{ URL::asset('js/goalProgress.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/goalProgress.css') }}" />
    <style>
        .fa_custom {
            color: #9ACD40;
        }
        .fa-4x     {
            font-size: 3.5em;
        }
        .team-description {
            font-family: Helvetica;
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
            font-weight: 300;
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
            background-color: #5cb85c;
            color: #fff;
            height: 50px;
            font-size:1em;
            font-weight:800;
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

        @media screen and (min-width: 900px) {
            #myModal1 .modal-dialog  {width:900px;}
        }
        .note
        {
            font-size: 12px;
            font-weight:200;
            color: red;
        }

    </style>
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-12" >
                <br>
                @include('common.errors')
                @include('common.flash')

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#raised').goalProgress({
                            goalAmount: totalGoal,
                            currentAmount: raised,
                            textBefore: '$ ',
                            textAfter: ' raised'
                        });
                    });
                </script>

                <div align="center" class="form-group">
                    <h2>Team: {{$team->name}}</h2>
                    <div id="raised"></div>
                </div>

                <div align="center">
                    <img class="img-responsive" id="IMG" alt="Image" src="{{ url('images/beautiful_team.jpg') }} "
                         width="600">
                </div>
                <br>

                <div class="panel panel-default">
                    <h2 class="team-title text-center" id = "member_title">{{$team->title}}</h2>
                    <p style="color: #9d9d9d" align="center">________________________________________________________________________________________</p>
                    <p class="team-description">{{$team->content}}</p>
                </div>

                <br>
                <br>
                <div class="closing-buttons" align="center" id="button-donate">
                    @if($data['button_show'] == 'true')
                        <a class="btn btn-lg btn-success" href="{{ action('CampaignController@joinTeam', [$team->token]) }}" id="member_join">Join Our Team</a>
                    @else
                        <a class="btn btn-lg btn-success" disabled="disabled" href="{{ action('CampaignController@joinTeam', [$team->token]) }}" id="member_join">Join Our Team</a>
                    @endif

                    <a class="btn btn-lg btn-success" href="{{ url('/donation/donate?team=' . $team->token)}}" id="member_donate">Donate to our goal</a>
                    @if($data['link_show']=='show')
                        <a id="solicitationLink" class="btn btn-lg btn-success" data-toggle="modal" href="#myModal1">Invite Friends to Join or Donate </a>
                    @endif
                </div>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#5cb85c !important;">
                                <a class="close" data-dismiss="modal">×</a>
                                <p align="center"><span style="font-size:1.5em;color:white;"><b>Family & Friends of Junior Achievement</b></span></p>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['url' => '/event/team', 'class' => 'form-horizontal']) !!}
                                @include('common.errors')
                                <div class="hidden-sm clear"> &nbsp;</div>
                                <div class="form-group{{ $errors->has('teamname') ? ' has-error' : '' }}">
                                    {!! Form::label('teamname', 'Team Name:', ['class' => 'col-md-4 control-label']) !!}
                                    <span style="color:red;">*</span>
                                    <div class="col-md-6">
                                        {!! Form::text('teamname', $team->title, ['id'=> 'teamname','class' => 'col-md-6 form-control','readonly'=>'true', 'required' => 'required']) !!}
                                        @if ($errors->has('teamname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('teamname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email', 'E-Mail:', ['class' => 'col-md-4 control-label']) !!}
                                    <span style="color:red;">*</span>
                                    <div class="col-md-6">
                                        {!! Form::email('email', null, ['id'=> 'email','placeholder' =>'Please separate your email list using a comma (,)','class' => 'col-md-6 form-control', 'required' => 'required','multiple']) !!}
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                             </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('user_message') ? ' has-error' : '' }}">
                                    {!! Form::label('message', 'Message:', ['class' => 'col-md-4 control-label']) !!}
                                    <span style="color:red;">*</span>
                                    <div class="col-md-6">
                                        {!! Form::textarea('user_message',$team->content, ['id'=> 'user_message', 'class' => 'col-md-6 form-control', 'required' => 'required', 'maxLength' => '2000']) !!}
                                        @if ($errors->has('user_message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_message') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('user_message') ? ' has-error' : '' }}">
                                    <div class="col-md-4"></div>
                                    <div class="note">{!! Form::label('note', 'NOTE: Your Message will be sent with a System generated Signature', ['class' => 'col-md-6']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::button('<i class="fa fa-submit"></i>Submit', ['type' => 'submit', 'id'=>'submit', 'class' => 'btn btn-success']) !!}
                                        {!! Form::button('<i class="fa fa-default"></i>Cancel', ['type' => 'default', 'id'=>'close', 'class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                    {!! Form::hidden('url', 'URL:', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::hidden('url',URL::current(), ['id'=> 'url','class' => 'col-md-6 form-control','readonly'=>'true', 'required' => 'required']) !!}
                                        @if ($errors->has('url'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('url') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('token') ? ' has-error' : '' }}">
                                    {!! Form::hidden('token', 'TOKEN:', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::hidden('token',$team->token, ['id'=> 'token','class' => 'col-md-6 form-control','readonly'=>'true', 'required' => 'required']) !!}
                                        @if ($errors->has('token'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('token') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                    {!! Form::hidden('id', 'ID:', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::hidden('id',$team->id, ['id'=> 'id','class' => 'col-md-6 form-control','readonly'=>'true', 'required' => 'required']) !!}
                                        @if ($errors->has('id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h4>Current Members of Team: {{$team->name}}</h4>
                <div align="center">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <!--<th>Name</th><th>Goal</th><th>Total Donated Amount</th><th>% Raised</th> -->
                            <th>Name</th><th>Goal</th><th> Amount Raised</th><th>% Raised</th>
                            </thead>
                            <tbody> <!-- Table Body -->
                            @foreach ($teamMembers as $teamMember)
                                <tr>
                                    <td class="table-text"><div><a href="{{action('CampaignController@teammember', [$teamMember->token])}}">{{ $teamMember->first_name }} {{ str_limit($teamMember->last_name, $limit = 1, $end = '.')}}</a></div></td>
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
                                        </div></td>
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
            {{--            <div class="col-md-3" >
                            <br>
                            <br>
                            <br>
                            <div class="donation-meter">
                                <strong>Team Goal</strong>
                                <strong class="goal">${{$team->goal}}</strong>
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
                        </div>--}}
        </div>
    </div>


@endsection