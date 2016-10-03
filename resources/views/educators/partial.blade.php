<div style="margin: 5px;">
    <span style="color:red;">*</span> fields are mandatory
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

<div class="form-group{{ $errors->has('schoolName') ? ' has-error' : '' }}">

    {!! Form::label('schoolName', 'School Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('schoolName', null, ['id'=>'schoolName','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolName'))
            <span class="help-block">
                <strong>{{ $errors->first('schoolName') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolPhone') ? ' has-error' : '' }}">

    {!! Form::label('schoolPhone', 'School Phone:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('schoolPhone', null, ['id'=> 'schoolPhone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolPhone'))
            <span class="help-block"><strong>{{ $errors->first('schoolPhone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolAddress') ? ' has-error' : '' }}">

    {!! Form::label('schoolAddress', 'School Address:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('schoolAddress', null, ['id'=> 'schoolAddress','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolAddress'))
            <span class="help-block"><strong>{{ $errors->first('schoolAddress') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolCity') ? ' has-error' : '' }}">

    {!! Form::label('schoolCity', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('schoolCity', null, ['id'=> 'schoolCity','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolCity'))
            <span class="help-block"><strong>{{ $errors->first('schoolCity') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolState') ? ' has-error' : '' }}">

    {!! Form::label('companyState', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('schoolState', null, ['id'=> 'schoolState','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolState'))
            <span class="help-block"><strong>{{ $errors->first('schoolState') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolZip') ? ' has-error' : '' }}">

    {!! Form::label('companyZip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('schoolZip', null, ['id'=> 'schoolZip','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolZip'))
            <span class="help-block"><strong>{{ $errors->first('schoolZip') }}</strong></span>
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

<div class="form-group{{ $errors->has('programTheme') ? ' has-error' : '' }}">
    {!! Form::label('programTheme', 'Program Theme:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('programTheme', null, ['id'=>'programTheme','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('programTheme'))
            <span class="help-block"><strong>{{ $errors->first('programTheme') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('noOfClasses') ? ' has-error' : '' }}">
    {!! Form::label('noOfClasses', 'No of Classes:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noOfClasses', null, ['id'=> 'noOfClasses','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('noOfClasses'))
            <span class="help-block"><strong>{{ $errors->first('noOfClasses') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('noOfStudentsPerClass') ? ' has-error' : '' }}">
    {!! Form::label('noOfStudentsPerClass', 'No of Students/Class:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noOfStudentsPerClass', null, ['id'=> 'noOfStudentsPerClass','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('noOfStudentsPerClass'))
            <span class="help-block"><strong>{{ $errors->first('noOfStudentsPerClass') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('planningTime') ? ' has-error' : '' }}">
    {!! Form::label('planningTime', 'Planning Time:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('planningTime', null, ['id'=> 'planningTime','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('planningTime'))
            <span class="help-block"><strong>{{ $errors->first('planningTime') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
    {!! Form::label('cellphone', 'Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cellphone', null, ['id'=> 'cellPhone','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('cellphone'))
            <span class="help-block"><strong>{{ $errors->first('cellPhone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('commentsRequests') ? ' has-error' : '' }}">
    {!! Form::label('commentsRequests', 'Comments/Requests:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('commentsRequests', null, ['id'=> 'commentsRequests','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('commentsRequests'))
            <span class="help-block"><strong>{{ $errors->first('commentsRequests') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit','id'=>'save', 'class' => 'btn btn-primary']) !!}
    </div>
</div>