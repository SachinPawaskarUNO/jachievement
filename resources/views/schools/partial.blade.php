<div class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">
    {!! Form::label('school_name', 'School Name:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('school_name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('school_name'))
            <span class="help-block">
                <strong>{{ $errors->first('school_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_address') ? ' has-error' : '' }}">
    {!! Form::label('school_address', 'School Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_address', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_address'))
            <span class="help-block">
                <strong>{{ $errors->first('school_address') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_city') ? ' has-error' : '' }}">
    {!! Form::label('school_city', 'School City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_city', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_city'))
            <span class="help-block">
                <strong>{{ $errors->first('school_city') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_state_id') ? ' has-error' : '' }}">
    {!! Form::label('school_state_id', 'School State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('school_state_id', $states, null,  ['id'=> 'school_state_id','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_state_id'))
            <span class="help-block">
                <strong>{{ $errors->first('school_state_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_zip') ? ' has-error' : '' }}">
    {!! Form::label('school_zip', 'School Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_zip', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_zip'))
            <span class="help-block">
                <strong>{{ $errors->first('school_zip') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_phone') ? ' has-error' : '' }}">
    {!! Form::label('school_phone', 'School Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_phone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_phone'))
            <span class="help-block">
                <strong>{{ $errors->first('school_phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_latitude') ? ' has-error' : '' }}">
    {!! Form::label('school_latitude', 'Map Latitude:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_latitude', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_latitude'))
            <span class="help-block">
                <strong>{{ $errors->first('school_latitude') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_longitude') ? ' has-error' : '' }}">
    {!! Form::label('school_longitude', 'Map Longitude:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_longitude', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_longitude'))
            <span class="help-block">
                <strong>{{ $errors->first('school_longitude') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                {{ Form::hidden('active', false) }}{{ Form::checkbox('active', true, old('active')) }} Active
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
        <a class="btn btn-default" href="{{ action('SchoolController@index') }}">Cancel</a>
    </div>
</div>
