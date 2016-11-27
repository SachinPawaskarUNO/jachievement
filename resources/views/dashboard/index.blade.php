@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></span></div>

                    <div class="panel-body">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-eye fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ number_format($viewers) }}</div>
                                            <div>
                                            @if ($viewers == 1)
                                            Unique Visitor this Week!
                                            @else
                                            Unique Visitors this Week!
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/visitors">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-usd fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ number_format($donations, 2) }}</div>
                                            <div>Donations this Week!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/reports/donation">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ number_format($hintsCount) }}</div>
                                            <div>Hits/Tips this Week!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/comments/index">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ number_format($volunteerFormCount + $educatorFormCount) }}</div>
                                            <div>Interest Forms this Week!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/educatorform">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Educator Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <a href="/admin/volunteerform">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Volunteer Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1"><br>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Page Visits Over 7 Days
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="page-visits-area-chart"></div>
                                </div>
                            <!-- /.panel-body -->
                            </div>
                        <!-- /.panel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/morris.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/raphael.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/metisMenu.min.js') }}"></script> 
<link rel="stylesheet" href="{{ URL::asset('css/metisMenu.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/sb-admin-2.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/morris.css') }}" />

<script>
$(function() {

    Morris.Line({
        element: 'page-visits-area-chart',
        data: [{
            date: "{{ $pageViewsData[0]['dt'] }}",
            visits: {{ $pageViewsData[0]['count'] }}
        }, {
            date: "{{ $pageViewsData[1]['dt'] }}",
            visits: {{ $pageViewsData[1]['count'] }}
        }, {
            date: "{{ $pageViewsData[2]['dt'] }}",
            visits: {{ $pageViewsData[2]['count'] }}
        }, {
            date: "{{ $pageViewsData[3]['dt'] }}",
            visits: {{ $pageViewsData[3]['count'] }}
        }, {
            date: "{{ $pageViewsData[4]['dt'] }}",
            visits: {{ $pageViewsData[4]['count'] }}
        }, {
            date: "{{ $pageViewsData[5]['dt'] }}",
            visits: {{ $pageViewsData[5]['count'] }}
        }, {
            date: "{{ $pageViewsData[6]['dt'] }}",
            visits: {{ $pageViewsData[6]['count'] }}
        }],
        xkey: 'date',
        ykeys: ['visits'],
        labels: ['Page Views'],
        pointSize: 4,
        hideHover: 'auto',
        resize: true,
        lineColors: ['green']
    });
    
});
</script>

@endsection