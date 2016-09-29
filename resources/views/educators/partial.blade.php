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

<div class="form-group{{ $errors->has('schoolName') ? ' has-error' : '' }}">
    {!! Form::label('schoolName', 'School Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolName', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('schoolName'))
            <span class="help-block">
                <strong>{{ $errors->first('schoolName') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolPhone') ? ' has-error' : '' }}">
    {!! Form::label('schoolPhone', 'School Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolPhone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolPhone'))
            <span class="help-block"><strong>{{ $errors->first('schoolPhone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolAddress') ? ' has-error' : '' }}">
    {!! Form::label('schoolAddress', 'School Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolAddress', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolAddress'))
            <span class="help-block"><strong>{{ $errors->first('schoolAddress') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolCity') ? ' has-error' : '' }}">
    {!! Form::label('schoolCity', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolCity', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolCity'))
            <span class="help-block"><strong>{{ $errors->first('schoolCity') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolState') ? ' has-error' : '' }}">
    {!! Form::label('companyState', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolState', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolState'))
            <span class="help-block"><strong>{{ $errors->first('schoolState') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schoolZip') ? ' has-error' : '' }}">
    {!! Form::label('companyZip', 'Zip:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('schoolZip', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('schoolZip'))
            <span class="help-block"><strong>{{ $errors->first('schoolZip') }}</strong></span>
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

<div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
    {!! Form::label('grade', 'Grade:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('grade', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('grade'))
            <span class="help-block"><strong>{{ $errors->first('grade') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('programTheme') ? ' has-error' : '' }}">
    {!! Form::label('programTheme', 'Program Theme:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <span><b>Our</b></span>  {!! Form::text('programTheme', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('programTheme'))
            <span class="help-block"><strong>{{ $errors->first('programTheme') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('noOfClasses') ? ' has-error' : '' }}">
    {!! Form::label('noOfClasses', 'No of Classes:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noOfClasses', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('noOfClasses'))
            <span class="help-block"><strong>{{ $errors->first('noOfClasses') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('noOfStudentsPerClass') ? ' has-error' : '' }}">
    {!! Form::label('noOfStudentsPerClass', 'Email:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noOfStudentsPerClass', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('noOfStudentsPerClass'))
            <span class="help-block"><strong>{{ $errors->first('noOfStudentsPerClass') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('planningTime') ? ' has-error' : '' }}">
    {!! Form::label('planningTime', 'Planning Time:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('planningTime', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('planningTime'))
            <span class="help-block"><strong>{{ $errors->first('planningTime') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('cellPhone') ? ' has-error' : '' }}">
    {!! Form::label('cellPhone', 'Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cellPhone', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('cellPhone'))
            <span class="help-block"><strong>{{ $errors->first('cellPhone') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('commentsRequests') ? ' has-error' : '' }}">
    {!! Form::label('commentsRequests', 'Comments/Requests:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('commentsRequests', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('commentsRequests'))
            <span class="help-block"><strong>{{ $errors->first('commentsRequests') }}</strong></span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
    </div>
</div>