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

<div class="form-group{{ $errors->has('schoolPreference') ? ' has-error' : '' }}">
    {!! Form::label('schoolPreference', 'If possible, I would like to teach at the following school:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolPreference', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolPreference'))
            <span class="help-block">
                    <strong>{{ $errors->first('schoolPreference') }}</strong>
                </span>
        @endif
    </div>
</div>







<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">

    {!! Form::label('amount', 'Please choose donation amount:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('amount', null, ['id'=> 'amount','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('amount'))
            <span class="help-block">
                    <strong>{{ $errors->first('amount') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">

    {!! Form::label('firstName', 'First Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('firstName', null, ['id'=> 'firstName','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('firstName'))
            <span class="help-block">
                    <strong>{{ $errors->first('firstName') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">

    {!! Form::label('lastName', 'Last Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('lastName', null, ['id'=> 'lastName','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('lastName'))
            <span class="help-block">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['id'=> 'address','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    {!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city', null, ['id'=> 'city','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('state', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('state', null, ['id'=> 'state','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('state'))
            <span class="help-block"><strong>
                    {{ $errors->first('state') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
    {!! Form::label('zip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('zip', null, ['id'=> 'zip','class' => 'col-md-6 form-control','maxLength' => '10']) !!}
        @if ($errors->has('zip'))
            <span class="help-block"><strong>{{ $errors->first('zip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone', null, ['id'=> 'companyPhone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('email', null, ['id'=> 'email','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit','id' => 'save', 'class' => 'btn btn-success']) !!}
    </div>
</div>
