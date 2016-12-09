@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        @if (!$authorized)
            <div class="alert alert-warning">       
              <strong>Not Authorized:</strong> You are not authorized to access this page.
            </div>
        @else
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></span></div>

                <div class="panel-body">
                    @if ($action == 'join')
                    {!! Form::open(['url' => '/event/teammember/update', 'class' => 'form-horizontal', 'method' => 'POST', 'id' => 'campaignForm']) !!}
                    @else
                    {!! Form::open(['url' => '/event/team/update', 'class' => 'form-horizontal', 'method' => 'POST', 'id' => 'campaignForm']) !!}
                    @endif
                    @include('common.errors')
                    @include('common.flash')

                    <div class="form-group">
                        {!! Form::label('campaign', 'Event:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                        <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $teamInfo->campName }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('organization', 'Organization:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                        <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $teamInfo->orgName }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('team', 'Team Name:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                        @if ($action == 'join')
                        <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $teamInfo->teamName }}</label>
                        @else
                        {!! Form::text('name', $teamInfo->teamName, ['id' => 'name', 'class' => 'col-md-7 form-control', 'required' => 'required']) !!}
                        @endif
                        </div>
                    </div>

                    <br/>

                    <div class="form-group">
                        @if ($action == 'join')
                        {!! Form::label('pageTitle', 'My Page Title:', ['class' => 'col-md-3 control-label']) !!}
                        @else
                        {!! Form::label('pageTitle', 'Team Page Title:', ['class' => 'col-md-3 control-label']) !!}
                        @endif
                        <div class="col-md-7">
                            {!! Form::text('title', $teamInfo->title, ['id' => 'title','class' => 'col-md-7 form-control', 'required' => 'required', 'placeholder' => 'Welcome to My JA Fundraiser Page!']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($action == 'join')
                        {!! Form::label('pageContent', 'My Page Content:', ['class' => 'col-md-3 control-label']) !!}
                        @else
                        {!! Form::label('pageContent', 'Team Page Content:', ['class' => 'col-md-3 control-label']) !!}
                        @endif
                        <div class="col-md-7">
                            {!! Form::textarea('content', $teamInfo->content, ['id' => 'content','class' => 'col-md-7 form-control', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($action == 'join')
                        {!! Form::label('fundraisingGoal', 'My Fundraising Goal:', ['class' => 'col-md-3 control-label']) !!}
                        @else
                        {!! Form::label('fundraisingGoal', 'Team Fundraising Goal:', ['class' => 'col-md-3 control-label']) !!}
                        @endif
                        <div class="col-md-4">
                            <input type="range" id="fundraisingGoalRange" min="0" max="10000" step="50" value="{{ $teamInfo->goal }}" onChange="changeGoalText()">
                        </div>
                        <div class="col-md-3">
                            {!! Form::text('formatGoal', '$'.number_format($teamInfo->goal), ['id' => 'formatGoal', 'class' => 'col-md-3 form-control', 'required' => 'required', 'onChange' => 'changeGoalSlider()', 'data-prefix' => '$', 'data-precision' => '0']) !!}
                        </div>
                    </div>

                    {!! Form::hidden('id', $teamInfo->id) !!}
                    {!! Form::hidden('goal', $teamInfo->goal, ['id' => 'goal']) !!}
                    {!! Form::hidden('organization_id', $teamInfo->orgId) !!}
                    {!! Form::hidden('campaign_id', $teamInfo->campId) !!}
                    {!! Form::hidden('token', $token) !!}
                    @if ($action == 'join')
                    {!! Form::hidden('team_id', $teamInfo->teamId) !!}
                    @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::button('Update', ['type' => 'submit','id' => 'updateButton', 'class' => 'btn btn-success']) !!}
                                <a class="btn btn-default" href="/">Cancel</a>
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {
        $('#formatGoal').maskMoney();
    })

    function changeGoalSlider(){
        var goalText = $('#formatGoal').maskMoney('unmasked')[0];

        document.getElementById("fundraisingGoalRange").value = goalText*1000;
        $('#goal').val(goalText*1000);
    }

    function changeGoalText(){
        var goalSlider = document.getElementById("fundraisingGoalRange").value;

        $('#formatGoal').val(goalSlider).maskMoney('mask','1,999');
        $('#goal').val(goalSlider);
    }
</script>
@endsection