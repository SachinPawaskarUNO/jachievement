<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Event Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Description:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('description', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    {!! Form::label('image', 'Image:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('image', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('event_date') ? ' has-error' : '' }}">
    {!! Form::label('event_date', 'Event Date:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('event_date', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('event_date'))
            <span class="help-block">
                <strong>{{ $errors->first('event_date') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
    {!! Form::label('venue', 'Venue:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('venue', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('venue'))
            <span class="help-block">
                <strong>{{ $errors->first('venue') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('team_default_content') ? ' has-error' : '' }}">
    {!! Form::label('team_default_content', 'Create Team Default Content:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('team_default_content', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('team_default_content'))
            <span class="help-block">
                <strong>{{ $errors->first('team_default_content') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('team_member_default_content') ? ' has-error' : '' }}">
    {!! Form::label('team_member_default_content', 'Join Team Default Content:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('team_member_default_content', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('team_member_default_content'))
            <span class="help-block">
                <strong>{{ $errors->first('team_member_default_content') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
        <a class="btn btn-default" href="/events">Cancel</a>
    </div>
</div>
