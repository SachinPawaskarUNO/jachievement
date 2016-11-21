@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix" style="background-color:#5cb85c !important;">
                        <p class="panel-title pull-left"><span style="font-size:1.2em;color:white;">
                                You received a message from Junior Achievement of Midlands

                                You have filled the educator interest form. Below are the details of form.
                                Educator Information of {{ first_name }} {{last_name}}</span> </p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="name">First Name</label>
                                <p id="name">{{ first_name }} {{last_name }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_name">School Name</label>
                                <p id="school_name" >{{ school_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">School Phone</label>
                                <p id="school_phone" >{{school_phone }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_address">School Address</label>
                                <p id="school_address" >{{ $school_address }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">School City</label>
                                <p id="school_phone" >{{ school_city }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <label for="school_address">School State</label>
                            <p id="school_address" >{{ school_state }}</p>
                        </div>
                        <div class="row">

                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">School Zip</label>
                                <p id="school_zip" >{{ school_zip }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Email</label>
                                <p id="school_phone" >{{ email }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Grade</label>
                                <p id="school_zip" >{{ grade }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Program Theme</label>
                                <p id="school_phone" >{{ program_theme }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Planning Time</label>
                                <p id="school_zip" >{{ planning_time }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Cell Phone</label>
                                <p id="school_phone" >{{ cell_phone }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Comments/Requests</label>
                                <p id="school_zip" >{{ comments_requests }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">No of Classes</label>
                                <p id="school_phone" >{{no_of_classes }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">No of Students Per Class</label>
                                <p id="school_zip" >{{ no_of_students_per_class }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection