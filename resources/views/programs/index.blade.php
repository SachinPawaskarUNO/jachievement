<style>
    th{
        color: rgba(140,198,62,0.85);
    }

    body{
        height: auto!important;
    }

</style>


@extends('layouts.app')
@section('content')

    <div class="container" id="pagecontainer">
        <div class="row" id="navrow">
            <h1 class="text-center">JUNIOR ACHIEVEMENT PROGRAMS</h1>
            <p class="text-left">Junior Achievement's unique delivery system provides the training, materials, and support necessary to bolster the chances for student success. The impact is measurable, too. Students who participate in Junior Achievement programs demonstrate a significant understanding of economics and business concepts. We invite you to take a closer look at our programs!</p>
            <br>
        </div>
        <div class="responsive">
            <md-content>
                <md-tabs md-dynamic-height="" md-border-bottom="">
                    <md-tab label="All Programs">
                        <md-content class="md-padding">
                            <h3 style="color:rgba(140,198,62,0.85)">All Programs</h3>

                            <p id="target1">Our programs help prepare young people for the real world by showing them how to generate wealth and effectively manage it,
                                how to create jobs which make their communities more robust, and how to apply entrepreneurial thinking to the workplace. Students
                                put these lessons into action and learn the value of contributing to their communities.</p><br>



                            <div id="programs_nav" class="row ja-anchor" style="padding-bottom:15px;padding-top:15px;border-top:solid #ccc 1px">
                                <div id="programs" class="col-md-12" style="padding-left:0;padding-right:0;">
                                    <div class="container" style="width:auto">
                                        <div class="row">

                                            @foreach ($allprograms as $allprogram)

                                                <div class="col-md-2" id="program_image">
                                                    <img src="{{ $allprogram->image }}" width="100", height="100"/>
                                                    <br>
                                                    <br>
                                                </div>

                                                <div class="col-md-10" id="program_name">
                                                    <h5 style="margin-top:0px; margin-bottom:0px">
                                                        <a href="{{$allprogram->program_url}}" target="_blank">{{$allprogram->name}}</a>
                                                    </h5>
                                                    <div class="allDesc collapse in">
                                                        <p style="font-size: small; line-height: 1.4em;">
                                                            {{ $allprogram->description }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 listDesc" style="padding-left:0;padding-right:0;">
                                                    <div class="container table ja-table-pillars">
                                                        <div class="row">
                                                            <div class="col-md-4 table-bordered" style="white-space: nowrap; background-color:#EEE!important;"><b>Implementation:</b>
                                                                <span class="Classroom-Based text-nowrap">{{ $allprogram->implementation }}</span>
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Entrepreneurship:</b>

                                                                @if ($allprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($allprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif

                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Financial Literacy:</b>
                                                                @if ($allprogram->financial_readiness == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($allprogram->financial_readiness == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-2 table-bordered" style="background-color:#EEE!important;"><b>Work Readiness:</b>
                                                                @if ($allprogram->work_readiness == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($allprogram->work_readiness == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </md-content>
                    </md-tab>

                    <md-tab label="Elementary School">
                        <md-content class="md-padding">
                            <h3 style="color:rgba(140,198,62,0.85)">Elementary School Programs</h3>

                            <p id="target2">Junior Achievement’s elementary school programs are the foundation of its K-12 curricula. Six sequential themes, each with five hands-on activities, as well as an after-school and capstone experience, work to change students’ lives by helping them understand business and economics.</p><br>


                            <div id="programs" class="row ja-anchor" style="padding-bottom:15px;padding-top:15px;border-top:solid #ccc 1px">
                                <div class="col-md-12" style="padding-left:0;padding-right:0;">
                                    <div class="container" style="width:auto">
                                        <div class="row">

                                            @foreach ($elementaryprograms as $elementaryprogram)

                                                <div class="col-md-2">
                                                    <img src="{{ $elementaryprogram->image }}" width="100", height="100"/>
                                                    <br>
                                                    <br>
                                                </div>

                                                <div class="col-md-10">
                                                    <h5 style="margin-top:0px; margin-bottom:0px">
                                                        <a href="{{$elementaryprogram->program_url}}" target="_blank">{{$elementaryprogram->name}}</a>
                                                    </h5>
                                                    <div class="allDesc collapse in">
                                                        <p style="font-size: small; line-height: 1.4em;">
                                                            {{ $elementaryprogram->description }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 listDesc" style="padding-left:0;padding-right:0;">
                                                    <div class="container table ja-table-pillars">
                                                        <div class="row">
                                                            <div class="col-md-4 table-bordered" style="white-space: nowrap; background-color:#EEE!important;"><b>Implementation:</b>
                                                                <span class="Classroom-Based text-nowrap">{{ $elementaryprogram->implementation }}</span>
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Entrepreneurship:</b>
                                                                @if ($elementaryprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($elementaryprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Financial Literacy:</b>
                                                                @if ($elementaryprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($elementaryprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-2 table-bordered" style="background-color:#EEE!important;"><b>Work Readiness:</b>
                                                                @if ($elementaryprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($elementaryprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </md-content>
                    </md-tab>
                    <md-tab label="Middle School">
                        <md-content class="md-padding">
                            <h3 style="color:rgba(140,198,62,0.85)">Middle School Programs</h3>

                            <p id="target3">The middle grades programs build on concepts the students learned in Junior Achievement’s elementary school program and help teens make difficult decisions about how to best prepare for their educational and professional future. The programs supplement standard social studies curricula and develop communication skills that are essential to success in the business world.</p><br>

                            <div id="programs" class="row ja-anchor" style="padding-bottom:15px;padding-top:15px;border-top:solid #ccc 1px">
                                <div class="col-md-12" style="padding-left:0;padding-right:0;">
                                    <div class="container" style="width:auto">
                                        <div class="row">

                                            @foreach ($middleprograms as $middleprogram)

                                                <div class="col-md-2">
                                                    <img src="{{ $middleprogram->image }}"width="100", height="100"/>
                                                    <br>
                                                    <br>
                                                </div>

                                                <div class="col-md-10">
                                                    <h5 style="margin-top:0px; margin-bottom:0px">
                                                        <a href="{{$middleprogram->program_url}}" target="_blank">{{$middleprogram->name}}</a>
                                                    </h5>
                                                    <div class="allDesc collapse in">
                                                        <p style="font-size: small; line-height: 1.4em;">
                                                            {{ $middleprogram->description }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 listDesc" style="padding-left:0;padding-right:0;">
                                                    <div class="container table ja-table-pillars">
                                                        <div class="row">
                                                            <div class="col-md-4 table-bordered" style="white-space: nowrap; background-color:#EEE!important;"><b>Implementation:</b>
                                                                <span class="Classroom-Based text-nowrap">{{ $middleprogram->implementation }}</span>
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Entrepreneurship:</b>
                                                                @if ($middleprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($middleprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Financial Literacy:</b>
                                                                @if ($middleprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($middleprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-2 table-bordered" style="background-color:#EEE!important;"><b>Work Readiness:</b>
                                                                @if ($middleprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($middleprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </md-content>
                    </md-tab>
                    <md-tab label="High School">
                        <md-content class="md-padding">
                            <h3 style="color:rgba(140,198,62,0.85)">High School Programs</h3>

                            <p id="target4">As high school students begin to position themselves for their future, there are many unanswered questions about what lies ahead. Junior Achievement’s high school programs help students make informed, intelligent decisions about their future, and foster skills that will be highly useful in the business world.</p><br>

                            <div id="programs" class="row ja-anchor" style="padding-bottom:15px;padding-top:15px;border-top:solid #ccc 1px">
                                <div class="col-md-12" style="padding-left:0;padding-right:0;">
                                    <div class="container" style="width:auto">
                                        <div class="row">

                                            @foreach ($highprograms as $highprogram)

                                                <div class="col-md-2">
                                                    <img src="{{ $highprogram->image }}" width="100", height="100"/>
                                                    <br>
                                                    <br>
                                                </div>

                                                <div class="col-md-10">
                                                    <h5 style="margin-top:0px; margin-bottom:0px">
                                                        <a href="{{$highprogram->program_url}}" target="_blank">{{$highprogram->name}}</a>
                                                    </h5>
                                                    <div class="allDesc collapse in">
                                                        <p style="font-size: small; line-height: 1.4em;">
                                                            {{ $highprogram->description }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 listDesc" style="padding-left:0;padding-right:0;">
                                                    <div class="container table ja-table-pillars">
                                                        <div class="row">
                                                            <div class="col-md-4 table-bordered" style="white-space: nowrap; background-color:#EEE!important;"><b>Implementation:</b>
                                                                <span class="Classroom-Based text-nowrap">{{ $highprogram->implementation }}</span>
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Entrepreneurship:</b>
                                                                @if ($highprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($highprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-3 table-bordered" style="background-color:#EEE!important;"><b>Financial Literacy:</b>
                                                                @if ($highprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($highprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-2 table-bordered" style="background-color:#EEE!important;"><b>Work Readiness:</b>
                                                                @if ($highprogram->entrepreneurship == 2)
                                                                    <i class="fa fa-star"></i>
                                                                @elseif($highprogram->entrepreneurship == 1)
                                                                    <i class="fa fa-star-half-o"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </md-content>
                    </md-tab>
                </md-tabs>
            </md-content>
        </div>
    </div>

@endsection