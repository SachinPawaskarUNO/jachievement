<style>
    th
    {
     color: rgba(140,198,62,0.85);
    }
</style>

@extends('layouts.app')
@section('content')

       <div class="container" id="container">
           <div class="row" id="row">
                    <h1 class="text-center">JUNIOR ACHIEVEMENT PROGRAMS</h1>
                    <p class="text-left">Junior Achievement's unique delivery system provides the training, materials, and support necessary to bolster the chances for student success. The impact is measurable, too. Students who participate in Junior Achievement programs demonstrate a significant understanding of economics and business concepts. We invite you to take a closer look at our programs!</p>
                  <br>
           </div>


           <div id="program-navbar">
                <md-content>
                    <md-tabs md-dynamic-height="" md-border-bottom="">
                        <md-tab label="All Program">
                            <md-content class="md-padding">
                                <h3 style="color:rgba(140,198,62,0.85)">All Program</h3>
                                <a class="button" onclick="$('#target1').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                                <br>
                                <p id="target1">Our programs help prepare young people for the real world by showing them how to generate wealth and effectively manage it,
                                    how to create jobs which make their communities more robust, and how to apply entrepreneurial thinking to the workplace. Students
                                    put these lessons into action and learn the value of contributing to their communities..</p>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Implementation</th>
                                        <th>Entrepreneurship</th>
                                        <th>Financial Literacy</th>
                                        <th>Work Readiness</th>

                                    @foreach ($allprograms as $allprogram)
                                        <tr>
                                            <td><img src="{{ $allprogram->image }}" width="80" height="80"/></td>
                                            <td><a href="{{$allprogram->program_url}}" target="_blank">{{$allprogram->name}}</a></td>
                                            <td>{{ $allprogram->description }}</td>
                                            <td>{{ $allprogram->implementation }}</td>
                                            <td>{{ $allprogram->entrepreneurship }}</td>
                                            <td>{{ $allprogram->financial_readiness }}</td>
                                            <td>{{ $allprogram->work_readiness }}</td>
                                        </tr>

                                     @endforeach

                                     </table>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>


                        <md-tab label="Elementary School">

                            <md-content class="md-padding">
                                <h3 style="color: rgba(140,198,62,0.85)">Elementary School</h3>
                                <a class="button" onclick="$('#target2').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                                <br>
                                <p id="target2">JA’s elementary school programs are the foundation of its K-12 curricula. Six sequential themes, each with five hands-on activities, as well as an after-school and capstone experience, work to change students’ lives by helping them understand business and economics.</p>


                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Implementation</th>
                                            <th>Entrepreneurship</th>
                                            <th>Financial Literacy</th>
                                            <th>Work Readiness</th>

                                            @foreach ($elementaryprograms as $elementaryprogram)
                                                <tr>
                                                    <td><img src="{{ $elementaryprogram->image }}" width="80" height="80"/></td>
                                                    <td><a href="{{$elementaryprogram->program_url}}" target="_blank">{{$elementaryprogram->name}}</a></td>
                                                    <td>{{ $elementaryprogram->description }}</td>
                                                    <td>{{ $elementaryprogram->implementation }}</td>
                                                    <td>{{ $elementaryprogram->entrepreneurship }}</td>
                                                    <td>{{ $elementaryprogram->financial_readiness }}</td>
                                                    <td>{{ $elementaryprogram->work_readiness }}</td>
                                                </tr>

                                            @endforeach
                                        </table>
                                    </div>
                                </div>


                            </md-content>
                        </md-tab>


                        <md-tab label="Middle School">
                            <md-content class="md-padding">
                                <h3 style="color: rgba(140,198,62,0.85)">Middle School</h3>
                                <a class="button" onclick="$('#target3').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                                <br>
                                <p id="target3">The middle grades programs build on concepts the students learned in Junior Achievement’s elementary school program and help teens make difficult decisions about how to best prepare for their educational and professional future. The programs supplement standard social studies curricula and develop communication skills that are essential to success in the business world..</p>

                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Implementation</th>
                                            <th>Entrepreneurship</th>
                                            <th>Financial Literacy</th>
                                            <th>Work Readiness</th>

                                            @foreach ($middleprograms as $middleprogram)
                                                <tr>
                                                    <td><img src="{{ $middleprogram->image }}" width="80" height="80"/></td>
                                                    <td><a href="{{$middleprogram->program_url}}" target="_blank">{{$middleprogram->name}}</a></td>
                                                    <td>{{ $middleprogram->description }}</td>
                                                    <td>{{ $middleprogram->implementation }}</td>
                                                    <td>{{ $middleprogram->entrepreneurship }}</td>
                                                    <td>{{ $middleprogram->financial_readiness }}</td>
                                                    <td>{{ $middleprogram->work_readiness }}</td>
                                                </tr>

                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </md-content>
                        </md-tab>


                        <md-tab label="High School">
                            <md-content class="md-padding">
                                <h3 style="color: rgba(140,198,62,0.85)">High School</h3>
                                <a class="button" onclick="$('#target4').toggle();">
                                    <i class="fa fa-book"></i>
                                </a>
                                <br>
                                <p id="target4">As high school students begin to position themselves for their future, there are many unanswered questions about what lies ahead. Junior Achievement’s high school programs help students make informed, intelligent decisions about their future, and foster skills that will be highly useful in the business world.</p>

                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Implementation</th>
                                            <th>Entrepreneurship</th>
                                            <th>Financial Literacy</th>
                                            <th>Work Readiness</th>

                                            @foreach ($highprograms as $highprogram)
                                                <tr>
                                                    <td><img src="{{ $highprogram->image }}" width="80" height="80"/></td>
                                                    <td><a href="{{$highprogram->program_url}}" target="_blank">{{$highprogram->name}}</a></td>
                                                    <td>{{ $highprogram->description }}</td>
                                                    <td>{{ $highprogram->implementation }}</td>
                                                    <td>{{ $highprogram->entrepreneurship }}</td>
                                                    <td>{{ $highprogram->financial_readiness }}</td>
                                                    <td>{{ $highprogram->work_readiness }}</td>
                                                </tr>

                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </md-content>
                        </md-tab>
                    </md-tabs>
                </md-content>
           </div>
       </div>

@endsection