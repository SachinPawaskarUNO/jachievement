@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading clearfix" style="background-color:#5cb85c !important;">
                        <p class="panel-title pull-left"><span style="font-size:1.2em;color:white;">Volunteer Information of  {{ $volunteerInterestForm->first_name }} {{$volunteerInterestForm->last_name}}</span> </p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="first_name">First Name</label>
                                <p id="first_name">{{ $volunteerInterestForm->first_name }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="last_name">Last Name</label>
                                <p id="last_name">{{ $volunteerInterestForm->last_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_name">School Preference</label>
                                <p id="school_name" >{{ $volunteerInterestForm->school_preference }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Company Name</label>
                                <p id="school_phone" >{{ $volunteerInterestForm->company_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_address">Company Address</label>
                                <p id="school_address" >{{ $volunteerInterestForm->company_address }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Company City</label>
                                <p id="school_phone" >{{ $volunteerInterestForm->company_city }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Company State</label>
                                <p id="school_zip" >{{ $volunteerInterestForm->company_state }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Company Zip</label>
                                <p id="school_phone" >{{ $volunteerInterestForm->company_zip }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Company Phone</label>
                                <p id="school_zip" >{{ $volunteerInterestForm->company_phone }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Home Phone</label>
                                <p id="school_phone" >{{ $volunteerInterestForm->home_phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Home Address</label>
                                <p id="school_zip" >{{ $volunteerInterestForm->home_address }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Home City</label>
                                <p id="school_phone" >{{ $volunteerInterestForm->home_city }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Home State</label>
                                <p id="school_zip" >{{ $volunteerInterestForm->home_state }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Home Zip</label>
                                <p id="school_phone" >{{ $volunteerInterestForm->home_zip }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Email</label>
                                <p id="school_zip" >{{ $volunteerInterestForm->email }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Mode of Contact</label>
                                <p id="school_zip" >{{ $volunteerInterestForm->mode_of_contact }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Program Preference</label>
                                <p id="program_preference" >
                                    @foreach($volunteer_programs as $volunteer_program)
                                       - {{ $volunteer_program->name }}
                                        <br>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pull-left">
                        <br>
                        <a href="{{ action('AdminController@listVolunteerForm') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
