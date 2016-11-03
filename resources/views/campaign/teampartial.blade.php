
<div class="form-group">
    {!! Form::label('campaign', 'Campaign:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <label class="control-label" style="font-weight: normal !important;">{{ $teamInfo->campName }}</label>
    @else
    <label class="control-label" style="font-weight: normal !important;">{{ $campaignInfo->campName }}</label>
    @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('organization', 'Organization:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <label class="control-label" style="font-weight: normal !important;">{{ $teamInfo->orgName }}</label>
    @else
    {!! Form::select('organization_id', $organizationList, null, ['id' => 'organization_id', 'class' => 'col-md-7 form-control', 'required' => 'required', 'placeholder' => 'Select an organization...']) !!}
    @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('team', 'Team Name:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <label class="control-label" style="font-weight: normal !important;">{{ $teamInfo->teamName }}</label>
    @else
    {!! Form::text('name', null, ['id' => 'name', 'class' => 'col-md-7 form-control', 'required' => 'required']) !!}
    @endif
    </div>
</div>

<br/>

<div class="form-group">
    {!! Form::label('pageTitle', 'Page Title:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('title', null, ['id' => 'title','class' => 'col-md-7 form-control', 'required' => 'required', 'placeholder' => 'Welcome to My JA Fundraiser Page!']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('pageContent', 'Page Content:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::textarea('content', null, ['id' => 'content','class' => 'col-md-7 form-control', 'required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('fundraisingGoal', 'Fundraising Goal:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-4">
        <input type="range" id="fundraisingGoalRange" min="0" max="10000" step="50" value="500" onChange="changeGoalText()">
    </div>
    <div class="col-md-3">
        {!! Form::text('formatGoal', '$500.00', ['id' => 'formatGoal', 'class' => 'col-md-3 form-control', 'required' => 'required', 'onChange' => 'changeGoalSlider()', 'data-prefix' => '$']) !!}
    </div>
</div>

@if ($action == 'join')
{!! Form::hidden('team_id', $teamInfo->id) !!}
@else
{!! Form::hidden('campaign_id', $campaignId) !!}
@endif
{!! Form::hidden('goal', '500.00', ['id' => 'goal']) !!}

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            @if ($action == 'join')
            {!! Form::button('Join Team', ['type' => 'submit','id' => 'joinTeam', 'class' => 'btn btn-success']) !!}
            @else
            {!! Form::button('Create Team', ['type' => 'submit','id' => 'createTeam', 'class' => 'btn btn-success']) !!}
            @endif
            {!! Form::button('<i class="fa"></i>Cancel', ['type' => 'button','id' => 'cancel', 'class' => 'btn']) !!}
        </div>
    </div>
