
<div class="form-group">
    {!! Form::label('campaign', 'Campaign:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
    <span class="control-label">JA Omaha Bowling Campaign</span>
    </div>
</div>
<div class="form-group">
    {!! Form::label('organization', 'Organization:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
    <span>Union Pacific Railroad</span>
    </div>
</div>
<div class="form-group">
    {!! Form::label('team', 'Team:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
    <span>Railroaders</span>
    </div>
</div>

<br/>

<div class="form-group">
    {!! Form::label('pageTitle', 'Page Title:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('title', 'Welcome to My JA Fundraiser Page!', ['id'=> 'title','class' => 'col-md-7 form-control', 'required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('pageContent', 'Page Content:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::textarea('content', null, ['id'=> 'content','class' => 'col-md-7 form-control', 'required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('fundraisingGoal', 'Fundraising Goal:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-4">
        <input type="range" id="fundraisingGoalRange" min="0" max="10000" step="50" value="500">
    </div>
    <div class="col-md-3">
        {!! Form::number('goal', 500, ['step' => '50', 'min' => '0', 'id'=> 'goal', 'class' => 'col-md-3 form-control', 'required' => 'required']) !!}
    </div>
</div>

{!! Form::hidden('team_id', 1) !!}
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Form::button('<i class="fa fa-btn fa-user-plus"></i>Join Team', ['type' => 'submit','id' => 'joinTeam', 'class' => 'btn btn-primary']) !!}
            {!! Form::button('<i class="fa"></i>Cancel', ['type' => 'button','id' => 'cancel', 'class' => 'btn']) !!}
        </div>
    </div>
