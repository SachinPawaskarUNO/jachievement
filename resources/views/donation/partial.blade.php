<div class="form-group">
    <div class="col-md-12">
        <p>
            <i>
                By donating to Junior Achievement of Midlands, you are helping in development and revisions of student curriculum,
                recruitment of volunteers, special events, and many other student-related initiatives. Questions?
                Please contact us through our Contact Us form
            </i>
        </p>
    </div>
</div>



<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">

    {!! Form::label('amount', 'Donation Amount:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::radio('amount', 5000.00, ['id'=> 'amount1','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$5,000',['class' => 'btn']) !!}
            </div>
            <div class="form-group">
                {!! Form::radio('amount', 1250.00, ['id'=> 'amount2','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$1,250',['class' => 'btn']) !!}
            </div>
            <div class="form-group">
                {!! Form::radio('amount', 500.00, ['id'=> 'amount3','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$500',['class' => 'btn']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::radio('amount', 26.00, ['id'=> 'amount4','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$26',['class' => 'btn']) !!}
            </div>
            <div class="form-group">
                {!! Form::radio('amount', null, ['id'=> 'amount5','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','Other:',['class' => 'btn']) !!}
                {!! Form::text('amount_actual', null, ['id'=> 'amount_actual','class' => 'form-control', 'maxLength' => 7]) !!}
            </div>
        </div>
        @if ($errors->has('amount'))
            <span class="help-block">
                    <strong>{{ $errors->first('amount') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

    {!! Form::label('first_name', 'First Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('first_name', $user_first, ['id'=> 'firstName','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                    <strong>{{ $errors->first('firstName') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

    {!! Form::label('last_name', 'Last Name:', ['class' => 'col-md-4 control-label']) !!}
    <span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('last_name', $user_last, ['id'=> 'lastName','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('last_name'))
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

<div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
    {!! Form::label('state_id', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('state_id', $states, null,  ['id'=> 'state_id','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('state_id'))
            <span class="help-block"><strong>{{ $errors->first('state_id') }}</strong></span>
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
        {!! Form::text('phone', null, ['id'=> 'companyPhone','class' => 'col-md-6 form-control','maxLength' => 12]) !!}
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
        {!! Form::text('email', $user_email, ['id'=> 'email','class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-inline">
    <div class="col-md-7 col-md-offset-3">
        <div class="form-group">
            {!! Form::checkbox('anonymous', 1, false, ['id'=> 'anonymous', 'class' => 'check_box' ]) !!}
            {!! Form::label('I would like to have my donation to be anonymous') !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i></i>Donate', ['type' => 'submit','id' => 'save', 'class' => 'btn btn-success']) !!}
    </div>
</div>
