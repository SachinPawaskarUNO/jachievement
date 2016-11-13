@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('/admin/download/educatorreport') }}" method="GET">
                                <button type="submit" id="download" class="btn btn-default">Export To Excel</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>Educator Information</b></div>
                    </div>
                    <div class="panel-body">
                        @if (count($educatorInterestForms) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead>
                                    <th>Educator Name</th><th>School Name</th><th>Email<th>Created Date</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($educatorInterestForms as $educatorInterestForm)
                                        <tr>
                                            <td class="table-text"><div><a href="{{ url('/admin/educatorform/'. $educatorInterestForm->id)}}">{{ $educatorInterestForm->first_name }} {{$educatorInterestForm->last_name }}</a></div></td>
                                            <td class="table-text"><div>{{ $educatorInterestForm->school_name }}</div></td>
                                            <td class="table-text"><div>{{ $educatorInterestForm->email }}</div></td>
                                            <td class="table-text"><div>{{ $educatorInterestForm->created_at->format('m/d/Y') }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>Educator Records Not Found</h4></div>
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