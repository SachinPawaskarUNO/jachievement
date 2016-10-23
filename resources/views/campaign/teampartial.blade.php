
<div class="form-group">
    {!! Form::label('campaign', 'Campaign:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <span class="control-label">{{ $teamInfo->campName }}</span>
    @else
    <span class="control-label">{{ $campaignInfo->campName }}</span>
    @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('organization', 'Organization:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <span>{{ $teamInfo->orgName }}</span>
    @else
    {!! Form::select('organization_id', $organizationList, null, ['id' => 'organization_id', 'class' => 'col-md-7 form-control', 'required' => 'required', 'placeholder' => 'Select an organization...']) !!}
    @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('team', 'Team Name:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
    @if ($action == 'join')
    <span>{{ $teamInfo->teamName }}</span>
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
        {!! Form::number('goal', 500, ['step' => '50', 'min' => '0', 'id' => 'goal', 'class' => 'col-md-3 form-control', 'required' => 'required', 'onChange' => 'changeGoalSlider()']) !!}
    </div>
</div>

@if ($action == 'join')
{!! Form::hidden('team_id', $teamId) !!}
@else
{!! Form::hidden('campaign_id', $campaignId) !!}
@endif

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            @if ($action == 'join')
            {!! Form::button('<i class="fa fa-btn fa-user-plus"></i>Join Team', ['type' => 'submit','id' => 'joinTeam', 'class' => 'btn btn-primary']) !!}
            @else
            {!! Form::button('<i class="fa fa-btn fa-users"></i>Create Team', ['type' => 'submit','id' => 'createTeam', 'class' => 'btn btn-primary']) !!}
            @endif
            {!! Form::button('<i class="fa"></i>Cancel', ['type' => 'button','id' => 'cancel', 'class' => 'btn']) !!}
        </div>
    </div>
