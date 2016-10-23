@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left">Educator Form Information - User Name: {{ $educatorInterestForm->first_name }} </h1>
                    </div>
                    $table->string('first_name');
                    $table->string('last_name');
                    $table->string('school_name');
                    $table->string('school_phone');
                    $table->string('school_address');
                    $table->string('school_city');
                    $table->string('school_zip');
                    $table->string('email');
                    $table->string('grade')->nullable();
                    $table->string('program_theme')->nullable();
                    $table->string('planning_time')->nullable();
                    $table->string('cell_phone')->nullable();
                    $table->string('comments_requests')->nullable();
                    $table->string('no_of_classes')->nullable();
                    $table->string('no_of_students_per_class')->nullable();
                    $table->integer('user_id')->unsigned()->nullable();
                    $table->foreign('user_id')->references('id')->on('users');

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="first_name">First Name</label>
                                <p id="fname">{{ $educatorInterestForm->first_name }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="last_name">Last Name</label>
                                <p id="last_name">{{ $educatorInterestForm->last_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_name">School Name</label>
                                <p id="school_name" >{{ $educatorInterestForm->school_name }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">School Phone</label>
                                <p id="school_phone" >{{ $educatorInterestForm->school_phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_address">School Address</label>
                                <p id="school_address" >{{ $educatorInterestForm->school_address }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">School City</label>
                                <p id="school_phone" >{{ $educatorInterestForm->school_city }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">School Zip</label>
                                <p id="school_zip" >{{ $educatorInterestForm->school_zip }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">School City</label>
                                <p id="school_phone" >{{ $educatorInterestForm->school_city }}</p>
                            </div>
                        </div>

                    </div>

                    <div class="panel-footer clearfix">
                        <div class="pull-left">
                            {!! Form::model($user, [
                            'method' => 'DELETE',
                            'action' => [
                            'EducatorsController@destroy',
                            $user->id
                            ]
                            ]) !!}
                            <a href="{{ action('UsersController@edit', [$user->id]) }}"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</button></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
@endsection