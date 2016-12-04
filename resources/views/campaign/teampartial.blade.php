
<div class="form-group">
    {!! Form::label('campaign', 'Event:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $teamInfo->campName }}</label>
    @else
    <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $campaignInfo->campName }}</label>
    @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('organization', 'Organization:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $teamInfo->orgName }}</label>
    @else
    {!! Form::select('organization_id', $organizationList + array('other' => 'Other'), null, ['id' => 'organization_id', 'class' => 'col-md-7 form-control', 'required' => 'required', 'placeholder' => 'Select an organization...', 'onChange' => 'showOrgInput()']) !!}
    @endif
    </div>
</div>
@if ($action == 'join')
@else
<div class="form-group" style="display:none;" id="orgNameDiv">
    {!! Form::label('otherOrg', 'Organization Name:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    {!! Form::text('orgName', null, ['id' => 'orgName', 'class' => 'col-md-7 form-control']) !!}
    </div>
</div>
@endif
<div class="form-group">
    {!! Form::label('team', 'Team Name:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <label class="control-label" style="font-weight: normal !important; text-align:left;">{{ $teamInfo->teamName }}</label>
    @else
    {!! Form::text('name', null, ['id' => 'name', 'class' => 'col-md-7 form-control', 'required' => 'required']) !!}
    @endif
    </div>
</div>

<br/>

<div class="form-group">
    {!! Form::label('pageTitle', 'Team Page Title:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('title', null, ['id' => 'title','class' => 'col-md-7 form-control', 'required' => 'required', 'placeholder' => 'Welcome to My JA Fundraiser Page!']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('pageContent', 'Team Page Content:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        @if ($action == 'join')
        {!! Form::textarea('content', $teamInfo->campCont, ['id' => 'content','class' => 'col-md-7 form-control', 'required' => 'required']) !!}
        @else
        {!! Form::textarea('content', $campaignInfo->campCont, ['id' => 'content','class' => 'col-md-7 form-control', 'required' => 'required']) !!}
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('fundraisingGoal', 'Team Fundraising Goal:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-4">
        <input type="range" id="fundraisingGoalRange" min="0" max="10000" step="50" value="500" onChange="changeGoalText()">
    </div>
    <div class="col-md-3">
        {!! Form::text('formatGoal', '$500', ['id' => 'formatGoal', 'class' => 'col-md-3 form-control', 'required' => 'required', 'onChange' => 'changeGoalSlider()', 'data-prefix' => '$', 'data-precision' => '0']) !!}
    </div>
</div>

@if ($action == 'join')
@else
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::checkbox('createMember', 1, null, ['id' => 'createMember', 'onClick' => 'createAndJoin()']) !!}
        <label class="control-label" style="font-weight: normal !important;"> &nbsp; Automatically join team after creating?</label>
    </div>
</div>

<div class="form-group" style="display:none" id="div1">
<br>
    {!! Form::label('personalPageTitle', 'My Page Title:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('personalTitle', null, ['id' => 'personalTitle','class' => 'col-md-7 form-control', 'placeholder' => 'Welcome to My JA Fundraiser Page!']) !!}
    </div>
</div>
<div class="form-group" style="display:none" id="div2">
    {!! Form::label('personalPageContent', 'My Page Content:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::textarea('personalContent', $campaignInfo->campPersCont, ['id' => 'personalContent','class' => 'col-md-7 form-control']) !!}
    </div>
</div>
<div class="form-group" style="display:none" id="div3">
    {!! Form::label('personalFundraisingGoal', 'My Fundraising Goal:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-4">
        <input type="range" id="personalFundraisingGoalRange" min="0" max="10000" step="50" value="500" onChange="changePersonalGoalText()">
    </div>
    <div class="col-md-3">
        {!! Form::text('personalFormatGoal', '$500', ['id' => 'personalFormatGoal', 'class' => 'col-md-3 form-control', 'onChange' => 'changePersonalGoalSlider()', 'data-prefix' => '$', 'data-precision' => '0']) !!}
    </div>
</div>
{!! Form::hidden('personalGoal', '500', ['id' => 'personalGoal']) !!}
@endif

@if ($action == 'join')
{!! Form::hidden('team_id', $teamInfo->id) !!}
@else
{!! Form::hidden('campaign_id', $campaignId) !!}
@endif
{!! Form::hidden('goal', '500', ['id' => 'goal']) !!}

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            @if ($action == 'join')
            {!! Form::button('Join Team', ['type' => 'submit','id' => 'joinTeam', 'class' => 'btn btn-success']) !!}
            @else
            {!! Form::button('Create Team', ['type' => 'submit','id' => 'createTeam', 'class' => 'btn btn-success']) !!}
            @endif
            <a class="btn btn-default" href="/">Cancel</a>
        </div>
    </div>
