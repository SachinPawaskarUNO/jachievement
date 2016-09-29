<div>
    <div class="form-group">
        <div class=" col-md-12">
            {!! Form::label('Choose your grade or program preference') !!}
            <span><i> (You may choose more than one grade level or program)</i></span>
        </div>
    </div>

    @foreach($grade1 as $grade_first)
        <div id="checkboxes" class="form-group">
            <div class="col-md-10">

                {!! Form::checkbox($grade_first->grade_id, $grade_first->grade_id, false) !!}
                {!! Form::label($grade_first->grade_name) !!}
                <span><i>{{$grade_first->grade_description}}</i></span>
            </div>
            <div style="margin-left:20px;">
                <div class="col-md-6">
                    {!! Form::checkbox($grade_first->program_id, $grade_first->program_id , false) !!}
                    {!! Form::label($grade_first->program_name) !!}
                </div>
            </div>
        </div>
    @endforeach

    <div class="form-group">
        <div class="col-md-10">
            {!! Form::checkbox('elementarySchoolProgram', 1, false) !!}
            {!! Form::label('Elementary School Program') !!}
            <span> <i>(Five sessions, 30-50 minutes each)</i></span>
        </div>
        <div style="margin-left:20px;">
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('kindergarten', 1, false) !!}
                    {!! Form::label('Kindergarten') !!}

                </div>
                <div class="col-md-6">

                    {!! Form::checkbox('first', 1, false) !!}
                    {!! Form::label('1st') !!}
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('second', 1, false) !!}
                    {!! Form::label('2nd') !!}

                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('third', 1, false) !!}
                    {!! Form::label('3rd') !!}

                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('fourth', 1, false) !!}
                    {!! Form::label('4th') !!}

                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('fifth', 1, false) !!}
                    {!! Form::label('5th') !!}
                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('sixth', 1, false) !!}
                    {!! Form::label('6th') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="form-group">

        <div class="col-md-10">
            {!! Form::checkbox('middleGradesProgram', 1, false) !!}
            {!! Form::label('Middle Grades Program ') !!}
            <span><i> (Six to eight sessions, 45 minutes each)</i></span>
        </div>
        <div style="margin-left:20px;">
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('economics', 1, false) !!}
                    {!! Form::label('JA Economics for Success') !!}

                </div>
                <div class="col-md-6">

                    {!! Form::checkbox('globalMarketplace', 1, false) !!}
                    {!! Form::label('JA Global Marketplace') !!}
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('myBusiness', 1, false) !!}
                    {!! Form::label('JA its My Business') !!}

                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('myFuture', 1, false) !!}
                    {!! Form::label('JA Its My Future') !!}

                </div>
            </div>
        </div>
    </div>


    <div class="form-group">

        <div class="col-md-10">
            {!! Form::checkbox('highSchoolProgram', 1, false) !!}
            {!! Form::label('High School Program ') !!}
            <span> <i>(Seven sessions, 45 minutes each)</i></span>
        </div>

        <div style="margin-left:20px;">
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('entrepreneurial', 1, false) !!}
                    {!! Form::label('JA Be Entrepreneurial') !!}
                </div>
                <div class="col-md-6">

                    {!! Form::checkbox('careerSuccess', 1, false) !!}
                    {!! Form::label('JA Career Success') !!}
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('companyProgram', 1, false) !!}
                    {!! Form::label('JA Company Program') !!}

                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('economicsSemester', 1, false) !!}
                    {!! Form::label('JA Economics (semester program)') !!}

                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('careerSuccess', 1, false) !!}
                    {!! Form::label('JA Career Success') !!}
                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('exploringEconomics', 1, false) !!}
                    {!! Form::label('JA Exploring Economics') !!}
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('economicsSemester', 1, false) !!}
                    {!! Form::label('JA Economics (semester program)') !!}
                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('exploringEconomics', 1, false) !!}
                    {!! Form::label('JA Exploring Economics') !!}
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    {!! Form::checkbox('personalFinance', 1, false) !!}
                    {!! Form::label('JA Personal Finance') !!}
                </div>
                <div class="col-md-6">
                    {!! Form::checkbox('titan', 1, false) !!}
                    {!! Form::label('JA Titan') !!}
                </div>
            </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-12">
        <p><i>Each classroom is visited once-a-week with the teacher and the volunteer deciding a mutually convinient day and time.
        The Junior Achievement staff will work with you in matching you to a school and grade level of your choice.</i></p>
    </div>
</div>

<div class="form-group{{ $errors->has('schoolPreference') ? ' has-error' : '' }}">
    {!! Form::label('schoolPreference', 'If possible, I would like to teach at the following school', ['class' => 'col-md-4 control-label']) !!}
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
    <div class="col-md-6">
        {!! Form::text('firstName', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('firstName'))
            <span class="help-block">
                <strong>{{ $errors->first('firstName') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
    {!! Form::label('lastName', 'Last Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lastName', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
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
        {!! Form::text('companyName', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('companyName'))
            <span class="help-block">
                <strong>{{ $errors->first('companyName') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('companyAddress') ? ' has-error' : '' }}">
    {!! Form::label('companyAddress', 'Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('companyAddress', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('companyAddress'))
            <span class="help-block"><strong>{{ $errors->first('companyAddress') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('companyCity') ? ' has-error' : '' }}">
    {!! Form::label('companyCity', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('comapnyCity', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('comapnyCity'))
            <span class="help-block"><strong>{{ $errors->first('comapnyCity') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('companyState') ? ' has-error' : '' }}">
    {!! Form::label('companyState', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('companyState', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('companyState'))
            <span class="help-block"><strong>{{ $errors->first('companyState') }}</strong></span>
        @endif
    </div>
</div>

<!--<div class="form-group col-md-8">
     //Form::label('states', 'State:', ['class' => 'col-md-4 control-label'])
     //Form::select('states', $states, null, ['class' => 'form-control'])
</div>-->


<div class="form-group{{ $errors->has('companyZip') ? ' has-error' : '' }}">
    {!! Form::label('companyZip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('companyZip', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('companyZip'))
            <span class="help-block"><strong>{{ $errors->first('companyZip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('companyPhone') ? ' has-error' : '' }}">
    {!! Form::label('companyPhone', 'Cell/Work Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('companyPhone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('companyPhone'))
            <span class="help-block"><strong>{{ $errors->first('comapnyPhone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('homePhone') ? ' has-error' : '' }}">
    {!! Form::label('homePhone', 'Home Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_phone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('home_phone'))
            <span class="help-block"><strong>{{ $errors->first('home_phone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('homeAddress') ? ' has-error' : '' }}">
    {!! Form::label('homeAddress', 'Home Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('homeAddress', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('homeAddress'))
            <span class="help-block"><strong>{{ $errors->first('homeAddress') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('homeCity') ? ' has-error' : '' }}">
    {!! Form::label('homeCity', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('homeCity', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('homeCity'))
            <span class="help-block"><strong>{{ $errors->first('homeCity') }}</strong></span>
        @endif
    </div>
</div>

<!--<div class="form-group col-md-8">
    //Form::label('states', 'State:', ['class' => 'col-md-4 control-label'])
 //Form::select('states', $states, null, ['class' => 'form-control'])
        </div>-->

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('homeState', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('homeState', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('homeState'))
            <span class="help-block"><strong>{{ $errors->first('homeState') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('homeZip') ? ' has-error' : '' }}">
    {!! Form::label('homeZip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('homeZip', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('homezip'))
            <span class="help-block"><strong>{{ $errors->first('homeZip') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
    </div>
</div>