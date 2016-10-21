<div style="margin: 5px;">
    <span style="color:red;">*</span> fields are mandatory
</div>
<div class="form-group">
    <div class=" col-md-12">
        {!! Form::label('Choose your grade or program preference') !!}
        <span><i> (You may choose more than one grade level or program)</i></span>
    </div>
</div>



<div class="form-group">
    <div class="col-md-10">
        {!! Form::checkbox('elementarySchoolProgram', 1, false, ['id'=> 'elementarySchoolProgram', 'class' => 'check1']) !!}
        {!! Form::label('Elementary School Program') !!}
        <span> <i>(Five sessions, 30-50 minutes each)</i></span>
    </div>
    @foreach($grade_program1 as $program1)
        <div style="margin-left:20px;">
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('program_choice_'.$program1->program_id, $program1->program_id, false,['class' => 'check1']) !!}
                    {!! Form::label($program1->program_name) !!}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="form-group">
    <div class="col-md-10">
        {!! Form::checkbox('middleGradesProgram', 1, false, ['id'=> 'middleGradesProgram', 'class' => 'check2' ]) !!}
        {!! Form::label('Middle Grade Program') !!}
        <span> <i>(Six to eight sessions, 45 minutes each)</i></span>
    </div>
    @foreach($grade_program2 as $program2)
        <div style="margin-left:20px;">
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('program_choice_'.$program2->program_id, $program2->program_id, false, ['class' => 'check2']) !!}
                    {!! Form::label($program2->program_name) !!}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="form-group">
    <div class="col-md-10">
        {!! Form::checkbox('highSchoolProgram', 1, false, ['id'=> 'highSchoolProgram', 'class' => 'check3' ]) !!}
        {!! Form::label('High School Program') !!}
        <span> <i>(Seven sessions, 45 minutes each)</i></span>
    </div>
    @foreach($grade_program3 as $program3)
        <div style="margin-left:20px;">
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('program_choice_'.$program3->program_id, $program3->program_id, false, ['class' => 'check3']) !!}
                    {!! Form::label($program3->program_name) !!}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="form-group">
    <div class="col-md-12">
        <p><i>Each classroom is visited once-a-week with the teacher and the volunteer deciding a mutually convinient day and time.
                The Junior Achievement staff will work with you in matching you to a school and grade level of your choice.</i></p>
    </div>
</div>

<div class="form-group{{ $errors->has('school_preference') ? ' has-error' : '' }}">
    {!! Form::label('school_preference', 'If possible, I would like to teach at the following school:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_preference', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('school_preference'))
            <span class="help-block">
                    <strong>{{ $errors->first('school_preference') }}</strong>
                </span>
        @endif
    </div>
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

<div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
    {!! Form::label('company_name', 'Company:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_name', null, ['id'=> 'company_name','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('company_name'))
            <span class="help-block">
                    <strong>{{ $errors->first('company_name') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('company_address') ? ' has-error' : '' }}">
    {!! Form::label('company_address', 'Comapany Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_address', null, ['id'=> 'company_address','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('company_address'))
            <span class="help-block"><strong>{{ $errors->first('company_address') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('company_city') ? ' has-error' : '' }}">
    {!! Form::label('company_city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_city', null, ['id'=> 'company_city','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('company_city'))
            <span class="help-block"><strong>{{ $errors->first('company_city') }}</strong></span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('company_state_id') ? ' has-error' : '' }}">
    {!! Form::label('company_state_id', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('company_state_id', $states, null,  ['id'=> 'company_state_id','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('company_state_id'))
            <span class="help-block"><strong>{{ $errors->first('company_state_id') }}</strong></span>
        @endif
    </div>
</div>



<div class="form-group{{ $errors->has('company_zip') ? ' has-error' : '' }}">
    {!! Form::label('company_zip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_zip', null, ['id'=> 'company_zip','class' => 'col-md-6 form-control','maxLength' => '10']) !!}
        @if ($errors->has('company_zip'))
            <span class="help-block"><strong>{{ $errors->first('company_zip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('company_phone') ? ' has-error' : '' }}">
    {!! Form::label('company_phone', 'Work Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_phone', null, ['id'=> 'company_phone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('company_phone'))
            <span class="help-block"><strong>{{ $errors->first('company_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_phone') ? ' has-error' : '' }}">
    {!! Form::label('home_phone', 'Home Phone:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('home_phone', null, ['id'=> 'home_phone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_phone'))
            <span class="help-block"><strong>{{ $errors->first('home_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_address') ? ' has-error' : '' }}">
    {!! Form::label('home_address', 'Home Address:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('home_address', null, ['id'=> 'home_address','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_address'))
            <span class="help-block"><strong>{{ $errors->first('home_address') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('home_city') ? ' has-error' : '' }}">

    {!! Form::label('home_city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('home_city', null, ['id'=> 'home_city','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_city'))
            <span class="help-block"><strong>{{ $errors->first('home_city') }}</strong></span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('home_state_id') ? ' has-error' : '' }}">
    {!! Form::label('home_state_id', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::select('home_state_id', $states,null,  ['id'=> 'home_state_id','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_state_id'))
            <span class="help-block"><strong>{{ $errors->first('home_state_id') }}</strong></span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('home_zip') ? ' has-error' : '' }}">
    {!! Form::label('home_zip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('home_zip', null, ['id'=> 'home_zip','class' => 'col-md-6 form-control','maxLength' => '10']) !!}
        @if ($errors->has('home_zip'))
            <span class="help-block"><strong>{{ $errors->first('home_zip') }}</strong></span>
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

<div class="form-group{{ $errors->has('mode_of_contact') ? ' has-error' : '' }}">
    {!! Form::label('mode_of_contact', 'Preferred mode of contact:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('mode_of_contact', $mode_of_contact, null,  ['id'=> 'modeOfContact','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('mode_of_contact'))
            <span class="help-block"><strong>{{ $errors->first('modeOfContact') }}</strong></span>
        @endif
    </div>
</div>


<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit','id' => 'save', 'class' => 'btn btn-success']) !!}
    </div>
</div>
