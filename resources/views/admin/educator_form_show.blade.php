@extends('layouts.app')

@section('content')

 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix" style="background-color:#5cb85c !important;">
                        <p class="panel-title pull-left"><span style="font-size:1.2em;color:white;">Educator Information of {{ $educatorInterestForm->first_name }} {{$educatorInterestForm->last_name}}</span> </p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="first_name">First Name</label>
                                <p id="first_name">{{ $educatorInterestForm->first_name }}</p>
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
                                <label for="school_address">School State</label>
                                <p id="school_address" >{{ $educatorInterestForm->school_state }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">School Zip</label>
                                <p id="school_zip" >{{ $educatorInterestForm->school_zip }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Email</label>
                                <p id="school_phone" >{{ $educatorInterestForm->email }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Grade</label>
                                <p id="school_zip" >{{ $educatorInterestForm->grade }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Program Theme</label>
                                <p id="school_phone" >{{ $educatorInterestForm->program_theme }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Planning Time</label>
                                <p id="school_zip" >{{ $educatorInterestForm->planning_time }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">Cell Phone</label>
                                <p id="school_phone" >{{ $educatorInterestForm->cell_phone }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">Comments/Requests</label>
                                <p id="school_zip" >{{ $educatorInterestForm->comments_requests }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label for="school_phone">No of Classes</label>
                                <p id="school_phone" >{{ $educatorInterestForm->no_of_classes }}</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="school_zip">No of Students Per Class</label>
                                <p id="school_zip" >{{ $educatorInterestForm->no_of_students_per_class }}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="pull-left">
                        <br>
                        <a href="{{ action('AdminController@listEducatorForm') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
     </div>

@endsection

<script type="text/javascript">
    $(document).on('submit', '.delete-form', function () {
        return confirm('Are you sure you want to delete this trainee?  If you do so, all evaluation records for the trainee will be lost.');
    });
</script>