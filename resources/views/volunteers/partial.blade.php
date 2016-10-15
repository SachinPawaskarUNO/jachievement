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

    <div class="form-group{{ $errors->has('companyName') ? ' has-error' : '' }}">
        {!! Form::label('companyName', 'Company:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('companyName', null, ['id'=> 'companyName','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('companyName'))
                <span class="help-block">
                    <strong>{{ $errors->first('companyName') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('companyAddress') ? ' has-error' : '' }}">
        {!! Form::label('companyAddress', 'Comapany Address:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('companyAddress', null, ['id'=> 'companyAddress','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('companyAddress'))
                <span class="help-block"><strong>{{ $errors->first('companyAddress') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('companyCity') ? ' has-error' : '' }}">
        {!! Form::label('companyCity', 'City:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('companyCity', null, ['id'=> 'companyCity','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('comapnyCity'))
                <span class="help-block"><strong>{{ $errors->first('comapnyCity') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('companyStateId') ? ' has-error' : '' }}">
        {!! Form::label('companyStateId', 'State:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('companyStateId', $states, null,  ['id'=> 'companyStateId','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('companyStateId'))
                <span class="help-block"><strong>{{ $errors->first('companyStateId') }}</strong></span>
            @endif
        </div>
    </div>



    <div class="form-group{{ $errors->has('companyZip') ? ' has-error' : '' }}">
        {!! Form::label('companyZip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('companyZip', null, ['id'=> 'companyZip','class' => 'col-md-6 form-control','maxLength' => '10']) !!}
            @if ($errors->has('companyZip'))
                <span class="help-block"><strong>{{ $errors->first('companyZip') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('companyPhone') ? ' has-error' : '' }}">
        {!! Form::label('companyPhone', 'Work Phone:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('companyPhone', null, ['id'=> 'companyPhone','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('companyPhone'))
                <span class="help-block"><strong>{{ $errors->first('comapnyPhone') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('homePhone') ? ' has-error' : '' }}">
        {!! Form::label('homePhone', 'Home Phone:', ['class' => 'col-md-4 control-label']) !!}
        <span style="color:red;">*</span>
        <div class="col-md-6">
            {!! Form::text('homePhone', null, ['id'=> 'homePhone','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('homePhone'))
                <span class="help-block"><strong>{{ $errors->first('homePhone') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('homeAddress') ? ' has-error' : '' }}">
        {!! Form::label('homeAddress', 'Home Address:', ['class' => 'col-md-4 control-label']) !!}
        <span style="color:red;">*</span>
        <div class="col-md-6">
            {!! Form::text('homeAddress', null, ['id'=> 'homeAddress','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('homeAddress'))
                <span class="help-block"><strong>{{ $errors->first('homeAddress') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('homeCity') ? ' has-error' : '' }}">

        {!! Form::label('homeCity', 'City:', ['class' => 'col-md-4 control-label']) !!}
        <span style="color:red;">*</span>
        <div class="col-md-6">
            {!! Form::text('homeCity', null, ['id'=> 'homeCity','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('homeCity'))
                <span class="help-block"><strong>{{ $errors->first('homeCity') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('homeStateId') ? ' has-error' : '' }}">
        {!! Form::label('homeStateId', 'State:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('homeStateId', $states,null,  ['id'=> 'homeStateId','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('homeStateId'))
                <span class="help-block"><strong>{{ $errors->first('homeStateId') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('homeZip') ? ' has-error' : '' }}">

        {!! Form::label('homeZip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
        <span style="color:red;">*</span>
        <div class="col-md-6">
            {!! Form::text('homeZip', null, ['id'=> 'homeZip','class' => 'col-md-6 form-control','maxLength' => '10']) !!}
            @if ($errors->has('homeZip'))
                <span class="help-block"><strong>{{ $errors->first('homeZip') }}</strong></span>
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

    <div class="form-group{{ $errors->has('modeOfContact') ? ' has-error' : '' }}">
        {!! Form::label('modeOfContact', 'Preferred mode of contact:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('modeOfContact', $modeOfContact, null,  ['id'=> 'modeOfContact','class' => 'col-md-6 form-control']) !!}
            @if ($errors->has('modeOfContact'))
                <span class="help-block"><strong>{{ $errors->first('modeOfContact') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit','id' => 'save', 'class' => 'btn btn-success']) !!}
        </div>
    </div>
