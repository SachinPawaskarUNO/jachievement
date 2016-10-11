
<div class="form-group">
    <div class="col-md-12">
        <p>
            <i>
                By donating to Junior Achievement Omaha, you are helping in development and revisions of student ciriculum,
                recruitment of volunteers, special events,and many other student-related initiatives. Questions?
                Please contact us thorugh our Contact Us form
            </i>
        </p>
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
    {!! Form::label('phone', 'Phone:', ['class' => 'col-md-4 control-label']) !!}
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

{{--<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Donate', ['type' => 'submit','id' => 'save', 'class' => 'btn btn-success']) !!}
    </div>
</div>--}}
