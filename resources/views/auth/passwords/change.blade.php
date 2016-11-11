@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Change Password</div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success alert-dismissible"> <strong>{!! Session::pull('flash_message') !!}</strong>
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/change-password') }}">{!! csrf_field() !!}
                            <div class="form-group{{ Session::has('current_password') ? ' has-error' : '' }} {{ $errors->has('current_password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-6">
                                    <input id="ja_pw_current" type="password" class="form-control" name="current_password" >

                                    @if(Session::has('current_password'))
                                        <div class="alert-danger "> <strong>{!! Session::pull('current_password') !!}</strong>
                                        </div>
                                    @endif
                                    @if ($errors->has('current_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="new_password">
                                    @if ($errors->has('new_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Confirm New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    <button id="ja_pw_submit" type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection