@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('/admin/download/volunteerreport') }}" method="GET">
                                <button type="submit" id="download_report" class="btn btn-default">Export To Excel</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>Volunteer Information</b></div>
                    </div>
                    <div class="panel-body">
                        @if (count($volunteerInterestForms) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead>
                                   <th>Volunteer Name</th><th>Email</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($volunteerInterestForms as $volunteerInterestForm)
                                        <tr>
                                            <td class="table-text"><div><a href="{{ url('/admin/volunteerform/'. $volunteerInterestForm->id)}}">{{ $volunteerInterestForm->first_name }} {{$volunteerInterestForm->last_name }}</a></div></td>
                                            <td class="table-text"><div>{{ $volunteerInterestForm->email }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>Volunteer Reccord Not Found</h4></div>
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

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );
    </script>
@endsection