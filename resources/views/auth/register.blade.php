@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <!-- <div class="panel-heading">Register</div> -->
                <div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>Register</b></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name:</label>

                            <div class="col-md-5">
                                <input id="ja_register_first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last Name:</label>

                            <div class="col-md-5">
                                <input id="ja_register_last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-5">
                                <input id="ja_register_email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm E-mail:</label>

                            <div class="col-md-5">
                                <input id="ja_register_email2" type="email" class="form-control" name="email_confirmation" >

                                @if ($errors->has('email_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password:</label>

                            <div class="col-md-5">
                                <input id="ja_register_pw1" type="password" class="form-control" name="password" >
                                <!--<input id="ja_register_pw1" type="password" class="form-control" name="password"  class="masterTooltip" title="Password must be between 6 to 16 characters.">-->
                              <!--<a class="masterTooltip" title="Password must be between 6 to 16 characters." style="background-color:green;color:white" >  ? </a>-->

                            <!--Display password checkbox-->

                                <input id="display_txtbox" type="checkbox" onchange="document.getElementById('ja_register_pw1').type = this.checked ? 'text' : 'password'"> Display password


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Hint for password criteria when mouse is hovered over the question icon-->

                            <div class="col-md-1">
                                <span class="glyphicon glyphicon-question-sign" class="masterTooltip" title="Password must be between 6 to 16 characters."></span>
                            </div>


                        </div>


                        <!--Confirm password-->
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password:</label>

                            <div class="col-md-5">
                                <input id="ja_register_pw2" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <div align="center">
                                <!--<button id="ja_register_submit" type="submit" class="btn btn-primary">-->
                                        <button id="ja_register_submit" type="submit" class="btn btn-success">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
