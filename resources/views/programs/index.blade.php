@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <h1 class="text-center">JUNIOR ACHIEVEMENT PROGRAMS</h1>
                <p class="text-left">Junior Achievement's unique delivery system provides the training, materials, and support necessary to bolster the chances for student success. The impact is measurable, too. Students who participate in Junior Achievement programs demonstrate a significant understanding of economics and business concepts. We invite you to take a closer look at our programs!</p>
            </div>
            <div>
                <md-content>
                    <md-tabs md-dynamic-height="" md-border-bottom="">
                        <md-tab label="All Program">
                            <md-content class="md-padding">
                                <h3>All Program</h3>
                                <a class="button" onclick="$('#target1').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                                <p id="target1">Our programs help prepare young people for the real world by showing them how to generate wealth and effectively manage it,
                                    how to create jobs which make their communities more robust, and how to apply entrepreneurial thinking to the workplace. Students
                                    put these lessons into action and learn the value of contributing to their communities..</p>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Implementation</th>
                                        <th>GradeName</th>

                                    @foreach ($programs as $program)
                                        <tr>
                                            <td>{{ $program->name }}</td>
                                            <td>{{ $program->description }}</td>
                                            <td>{{ $program->image }}</td>
                                            <td>{{ $program->implementation }}</td>
                                            <td>{{ $program->gradename }}</td>
                                        </tr>

                                     @endforeach
                                     </table>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <md-tab label="Elementary School">
                            <md-content class="md-padding">
                                <h3>Elementary School</h3>
                                <a class="button" onclick="$('#target2').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                               <p id="target2">JA’s elementary school programs are the foundation of its K-12 curricula. Six sequential themes, each with five hands-on activities, as well as an after-school and capstone experience, work to change students’ lives by helping them understand business and economics.</p>

                            </md-content>
                        </md-tab>
                        <md-tab label="Middle School">
                            <md-content class="md-padding">
                                <h3>Middle School</h3>
                                <a class="button" onclick="$('#target3').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                                <p id="target3">The middle grades programs build on concepts the students learned in Junior Achievement’s elementary school program and help teens make difficult decisions about how to best prepare for their educational and professional future. The programs supplement standard social studies curricula and develop communication skills that are essential to success in the business world..</p>
                            </md-content>
                        </md-tab>
                        <md-tab label="High School">
                            <md-content class="md-padding">
                                <h3>High School</h3><a class="button" onclick="$('#target4').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                               <p id="target4">As high school students begin to position themselves for their future, there are many unanswered questions about what lies ahead. Junior Achievement’s high school programs help students make informed, intelligent decisions about their future, and foster skills that will be highly useful in the business world.</p>
                            </md-content>
                        </md-tab>
                    </md-tabs>
                </md-content>
            </div>
        </div>
    </div>
@endsection