<div class="hidden-sm clear"> &nbsp;</div> 
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('name', null, ['id'=> 'name', 'class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'E-Mail:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('email', null, ['id'=> 'email', 'class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
    {!! Form::label('phoneNumber', 'Phone:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('phone_number', null, ['id'=> 'phone_number', 'class' => 'col-md-6 form-control', 'required' => 'required', 'maxLength' => '10']) !!}
        @if ($errors->has('phone_number'))
            <span class="help-block">
                <strong>{{ $errors->first('phone_number') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('user_message') ? ' has-error' : '' }}">
    {!! Form::label('message', 'Message:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::textarea('user_message', null, ['id'=> 'user_message', 'class' => 'col-md-6 form-control', 'required' => 'required', 'maxLength' => '500']) !!}
        @if ($errors->has('user_message'))
            <span class="help-block">
                <strong>{{ $errors->first('user_message') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn"></i>Submit', ['type' => 'submit', 'id'=>'submit', 'class' => 'btn btn-success']) !!}
    </div>
</div>

