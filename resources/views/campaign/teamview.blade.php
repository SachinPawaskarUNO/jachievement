@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
 <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.2em;color:white;">
                        <div><h4><b>Created Team Report</b></h4></div>
                    </div>
                    <br>
                 
     


    
                    <div class="panel-body">
                        @if (count($teamInfo) > 0)
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead>
                                    <th>Name</th><th>Amount</th><th>Date Created</th><th>Title</th>

                               

                                    </thead>
                                    <tbody> <!-- Table Body -->
                                   @foreach($teamInfo as $team)
                    

                    <tr>
                                            <td class="table-text"><a href="view/{{$team->teamtoken}}"><div>{{$team->teamname}}</a></div></td>
                                            <td class="table-text"><div>${{number_format($team->teamgoal,2)}}</div></td>
                                            <td class="table-text"><div>{{$team->teamdate}}</div></td>
                                            <td class="table-text"><div>{{$team->teamtitle}}</div></td>
                              
                                
                                        </tr>

                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Team Information found</h4></div>
                        @endif
                    </div>
                </div>
                </div>
                </div>
                </div>
@endsection

@section('footer')
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }


   
    </style>

    @endsection