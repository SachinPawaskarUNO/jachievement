<div class="form-group">
    <div class="col-md-12">
        <p>
            <i>
                By donating to Junior Achievement Omaha, you are helping in development and revisions of student curriculum,
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
                {!! Form::radio('amount', 5000, ['id'=> 'amount1','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$5000',['class' => 'btn']) !!}
            </div>
            <div class="form-group">
                {!! Form::radio('amount', 2500, ['id'=> 'amount2','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$2500',['class' => 'btn']) !!}
            </div>
            <div class="form-group">
                {!! Form::radio('amount', 2000, ['id'=> 'amount3','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$2000',['class' => 'btn']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::radio('amount', 1000, ['id'=> 'amount4','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','$1000',['class' => 'btn']) !!}
            </div>
            <div class="form-group">
            {!! Form::radio('amount', 200, ['id'=> 'amount5','class' => 'col-md-6 form-control']) !!}
            {!! Form::label('lb_1','$200',['class' => 'btn']) !!}
            </div>
{{--            <div class="form-group">
                {!! Form::radio('amount', null, ['id'=> 'amount_other','class' => 'col-md-6 form-control']) !!}
                {!! Form::label('lb_1','Other:',['class' => 'btn']) !!}
                {!! Form::text('amount', null, ['id'=> 'amount_actual','class' => 'form-control']) !!}
            </div>--}}
        </div>
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

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Donate', ['type' => 'submit','id' => 'save', 'class' => 'btn btn-success']) !!}
    </div>
</div>
