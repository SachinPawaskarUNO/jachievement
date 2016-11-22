<div style="margin: 5px;">
    <span style="color:red;">*</span> fields are mandatory
</div>

<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

    {!! Form::label('first_name', 'First Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('first_name', null, ['id'=> 'first_name','class' => 'col-md-6 form-control']) !!}

        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

    {!! Form::label('last_name', 'Last Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('last_name', null, ['id'=> 'last_name','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">

    {!! Form::label('school_name', 'School Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('school_name', null, ['id'=>'school_name','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_name'))
            <span class="help-block">
                <strong>{{ $errors->first('school_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_phone') ? ' has-error' : '' }}">

    {!! Form::label('school_phone', 'School Phone:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('school_phone', null, ['id'=> 'school_phone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_phone'))
            <span class="help-block"><strong>{{ $errors->first('school_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_address') ? ' has-error' : '' }}">

    {!! Form::label('school_address', 'School Address:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('school_address', null, ['id'=> 'school_address','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_address'))
            <span class="help-block"><strong>{{ $errors->first('school_address') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_city') ? ' has-error' : '' }}">

    {!! Form::label('school_city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('school_city', null, ['id'=> 'school_city','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_city'))
            <span class="help-block"><strong>{{ $errors->first('school_city') }}</strong></span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('school_state_id') ? ' has-error' : '' }}">
    {!! Form::label('school_state_id', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::select('school_state_id', $states, null,  ['id'=> 'school_state_id','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_state_id'))
            <span class="help-block"><strong>{{ $errors->first('school_state_id') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('school_zip') ? ' has-error' : '' }}">

    {!! Form::label('company_zip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('school_zip', null, ['id'=> 'school_zip','class' => 'col-md-6 form-control','maxLength' => '10']) !!}
        @if ($errors->has('school_zip'))
            <span class="help-block"><strong>{{ $errors->first('school_zip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('email', null, ['id'=> 'email','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
    {!! Form::label('grade', 'Grade:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('grade', null, ['id'=> 'grade','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('grade'))
            <span class="help-block"><strong>{{ $errors->first('grade') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('program_theme') ? ' has-error' : '' }}">
    {!! Form::label('program_theme', 'Program Theme:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('program_theme', null, ['id'=>'program_theme','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('program_theme'))
            <span class="help-block"><strong>{{ $errors->first('program_theme') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('no_of_classes') ? ' has-error' : '' }}">
    {!! Form::label('no_of_classes', '# of Classes:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('no_of_classes', null, ['id'=> 'no_of_classes','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('no_of_classes'))
            <span class="help-block"><strong>{{ $errors->first('no_of_classes') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('no_of_students_per_class') ? ' has-error' : '' }}">
    {!! Form::label('no_of_students_per_class', '# of Students/Class:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('no_of_students_per_class', null, ['id'=> 'no_of_students_per_class','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('no_of_students_per_class'))
            <span class="help-block"><strong>{{ $errors->first('no_of_students_per_class') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('planning_time') ? ' has-error' : '' }}">
    {!! Form::label('planning_time', 'Planning Time:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('planning_time', null, ['id'=> 'planning_time','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('planning_time'))
            <span class="help-block"><strong>{{ $errors->first('planning_time') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('cell_phone') ? ' has-error' : '' }}">
    {!! Form::label('cell_phone', 'Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cell_phone', null, ['id'=> 'cell_phone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('cell_phone'))
            <span class="help-block"><strong>{{ $errors->first('cell_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('comments_requests') ? ' has-error' : '' }}">
    {!! Form::label('comments_requests', 'Comments/Requests:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('comments_requests', null, ['id'=> 'comments_requests','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('comments_requests'))
            <span class="help-block"><strong>{{ $errors->first('comments_requests') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('Submit', ['type' => 'submit','id'=>'save', 'class' => 'btn btn-success']) !!}
        <a class="btn btn-default" href="/">Cancel</a>
    </div>
</div>