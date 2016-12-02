<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Program Name:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
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
	<span style="color:red;">*</span>
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
    {!! Form::label('image', 'Image Link:', ['class' => 'col-md-4 control-label']) !!}
	
    <div class="col-md-6">
        {!! Form::text('image', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('program_url') ? ' has-error' : '' }}">
    {!! Form::label('program_url', 'Program url:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('program_url', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('program_url'))
            <span class="help-block">
                <strong>{{ $errors->first('program_url') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('implementation') ? ' has-error' : '' }}">
    {!! Form::label('implementation', 'Implementation:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('implementation', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('implementation'))
            <span class="help-block">
                <strong>{{ $errors->first('implementation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('grade_id') ? ' has-error' : '' }}">
    {!! Form::label('grade_id', 'Grade Level:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::select('grade_id',[1 => 'Elementary School',2 => 'Middle School',3 => 'High School'], null, ['class' => 'col-md-6 form-control','placeholder'=>'Select one value:']) !!}
        @if ($errors->has('grade_id'))
            <span class="help-block">
                <strong>{{ $errors->first('grade_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('entrepreneurship') ? ' has-error' : '' }}">
    {!! Form::label('entrepreneurship', 'Entrepreneurship:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('entrepreneurship',[0 => 'Blank Star',1 => 'Half Star',2 => 'Full Star'], null, ['class' => 'col-md-6 form-control','placeholder'=>'Select one value:']) !!}
        @if ($errors->has('entrepreneurship'))
            <span class="help-block">
                <strong>{{ $errors->first('entrepreneurship') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('financial_readiness') ? ' has-error' : '' }}">
    {!! Form::label('financial_readiness', 'Financial Readiness:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('financial_readiness',[0 => 'Blank Star',1 => 'Half Star',2 => 'Full Star'], null, ['class' => 'col-md-6 form-control','placeholder'=>'Select one value:']) !!}
        @if ($errors->has('financial_readiness'))
            <span class="help-block">
                <strong>{{ $errors->first('financial_readiness') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('work_readiness') ? ' has-error' : '' }}">
    {!! Form::label('work_readiness', 'Work Readiness:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('work_readiness',[0 => 'Blank Star',1 => 'Half Star',2 => 'Full Star'], null, ['class' => 'col-md-6 form-control','placeholder'=>'Select one value:']) !!}
        @if ($errors->has('work_readiness'))
            <span class="help-block">
                <strong>{{ $errors->first('work_readiness') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
        <a class="btn btn-default" href="/programs">Cancel</a>
    </div>
</div>
