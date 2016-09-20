<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
    {!! Form::label('company', 'Company:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('company'))
            <span class="help-block">
                <strong>{{ $errors->first('company') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('address'))
            <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    {!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('city'))
            <span class="help-block"><strong>{{ $errors->first('city') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('state', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('state', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('state'))
            <span class="help-block"><strong>{{ $errors->first('state') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
    {!! Form::label('zip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('zip', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('zip'))
            <span class="help-block"><strong>{{ $errors->first('zip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('work_phone') ? ' has-error' : '' }}">
    {!! Form::label('work_phone', 'Cell/Work Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('work_phone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('work_phone'))
            <span class="help-block"><strong>{{ $errors->first('work_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_phone') ? ' has-error' : '' }}">
    {!! Form::label('home_phone', 'Cell/Work Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_phone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_phone'))
            <span class="help-block"><strong>{{ $errors->first('home_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_address') ? ' has-error' : '' }}">
    {!! Form::label('home_address', 'Home Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_address', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_address'))
            <span class="help-block"><strong>{{ $errors->first('home_address') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_city') ? ' has-error' : '' }}">
    {!! Form::label('home_city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_city', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_city'))
            <span class="help-block"><strong>{{ $errors->first('home_city') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('home_state', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_state', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_state'))
            <span class="help-block"><strong>{{ $errors->first('home_state') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_zip') ? ' has-error' : '' }}">
    {!! Form::label('home_zip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_zip', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_zip'))
            <span class="help-block"><strong>{{ $errors->first('home_zip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>