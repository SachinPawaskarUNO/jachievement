@extends('layouts.app')
@section('content')

    <style>
        /*Styles for  buttons, grid views and the icons */
        .fa_custom {
            color: #9ACD40;
        }

        .fa-4x     {
            font-size: 3.5em;
        }
        .progress {
            background: rgba(245, 245, 245, 1);
            background: -webkit-linear-gradient(top, rgba(245, 245, 245, 1) 0%, rgba(245, 245, 245, 1) 100%);
            background: linear-gradient(to bottom, rgba(245, 245, 245, 1) 0%, rgba(245, 245, 245, 1) 100%);
            border: 0px solid rgba(245, 245, 245, 1); border-radius: 25px; height: 17px;
        }
        .progress-bar-custom {
            background: rgba(11, 179, 92, 1);
            background: -webkit-linear-gradient(top, rgba(230, 216, 18, 1) 0%, rgba(11, 179, 92, 1) 100%);
            background: linear-gradient(to bottom, rgba(230, 216, 18, 1) 0%, rgba(11, 179, 92, 1) 100%);
        }
        .program-description {
            font-family: "Calibri Light";
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            margin-left: 1%;
            margin-right: 1%;
            line-height:1.5;
        }

        .content-description {
            font-family: "Calibri Light";
            font-size: 18px;
            font-weight: 500;
            text-align: left;
            margin-left: 1.5%;
            margin-right: 1.5%;
            line-height:1.5;
        }

        .raisedgoal {
            font-family: "Calibri";
            font-size: 42px;
            font-weight: 700;
        }

        .goal {
            font-family: "Calibri Light";
            font-size: 20px;
            font-weight: 100;
        }

        .program-title {
            font-family: "Calibri Light";
            font-size:24px;
            font-weight: 800;
        }
        .btn {
            padding: 18px 18px;
            border: 0 none;
            font-weight: 600;
            font-size: 11pt;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #ffffff;
            border-radius: 0%;
        }

        .btn-primary {
            background: #9ACD50;
            color: #ffffff;
            border-radius: 0%;
        }
        .btn-primary:hover,.btn-primary:focus, .btn-primary:active:focus {
            background: #4CBB17 !important;
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
            font-family:"Calibri Light";
            font-size:15pt;
            font-weight:600;
            text-align: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        td{
            height: 50px;
            vertical-align: bottom;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: center;
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

    <div class="container-fluid" style="background-color:rgb(245,245,245)">
        <div class="container">
            @include('common.errors')
            @include('common.flash')
            <h2 class="section-heading text-center">{{$team->name}}</h2>
            <p style="color: #9d9d9d"  align="center">________________</p>
            <br>
            <div class="row">

                <div class="col-sm-7">
                    <img class="img-responsive" id="IMG" alt="Image" src="{{ url('images/ice_person.jpg') }}" height="500px">
                </div>

                <div class="col-sm-5">
                    <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                        <div class="program">
                            <br>
                            <h4 class="program-title" align="center">{{$teamMember->title}}</h4>
                        </div>
                        <div class="program">
                            <br>
                            <span class="raisedgoal">
                                <strong>
                                    ${{$teammemberDonation->donation_amount}}
                                </strong>
                            </span>
                            <span class="goal">of ${{$teamMember->goalNoDecimal}} goal</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow={{$teamMember->current}} aria-valuemin="0" aria-valuemax="100" style=" min-width:2em; width: {{$teamMember->current}}%"></div>
                            </div>

                            <div class="closing-buttons" align="center" id="button-donate">
                                <br>
                                <a class="btn btn-sm btn-success" href="{{ url('/donation/donate?team=' . $team->token . '&teammember=' . $teamMember->token)}}" id="member_donate">Donate to my goal</a>
                                <br><br><br>
                            </div>
                            <div class="donor-link" align="center"><a class="donor-link" href="{{url('/donors')}}">Learn More About Donating</a></div>
                            <div class="hidden-sm clear"> &nbsp;</div>
                            <div class="hidden-sm clear"> &nbsp;</div>
                            <div class="hidden-sm clear"> &nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-sm clear"> &nbsp;</div>
            <div class="hidden-sm clear"> &nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="content-description">{!! nl2br($teamMember->content) !!}</p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="closing-buttons" align="center" id="button-donate">
                        <br>
                        @if($data['button_show'] == 'true')
                            <a class="btn btn-sm btn-success" href="{{ action('CampaignController@joinTeam', [$teamMember->token]) }}" id="member_join">Join Our Team</a>
                        @endif
                        @if($data['link_show']=='show')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a id="solicitationLink" class="btn btn-lg btn-success" data-toggle="modal" href="#myModal1">Invite Friends to Join or Donate </a>
                        @endif
                        @if($data['editable'])
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-sm btn-success" href="{{ action('CampaignController@editTeamMember', [$teamMember->token]) }}" id="editLink">Edit Page Contents</a>
                        @endif
                        <br><br><br><br>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#5cb85c !important;">
                            <a class="close" data-dismiss="modal">×</a>
                            <p align="center"><span style="font-size:1.5em;color:white;"><b>Family & Friends of Junior Achievement</b></span></p>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['url' => '/event/teammember', 'class' => 'form-horizontal']) !!}
                            @include('common.errors')
                            <div class="hidden-sm clear"> &nbsp;</div>
                            <div class="form-group{{ $errors->has('teamname') ? ' has-error' : '' }}">
                                {!! Form::label('teamname', 'Team Member Title:', ['class' => 'col-md-4 control-label']) !!}
                                <span style="color:red;">*</span>
                                <div class="col-md-6">
                                    {!! Form::text('teamname',$teamMember->title, ['id'=> 'teamname','class' => 'col-md-6 form-control','readonly'=>'true', 'required' => 'required']) !!}
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
                                    {!! Form::button('<i class="fa fa-default"></i>Cancel', ['type' => 'cancel', 'id'=>'close', 'class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
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
                                    {!! Form::hidden('id',$teamMember->id, ['id'=> 'id','class' => 'col-md-6 form-control','readonly'=>'true', 'required' => 'required']) !!}
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

            <div class="program-description" align="left"><p align="left">Current Members of Team: {{$team->name}} </p></div>
            <div align="center">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
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

    </div>
    <br>
    <br>
    </div>
    </div>


@endsection