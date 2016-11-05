@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div><h4><b>Educator Interest Form</b></h4></div>
                    </div>
                    <div class="panel-body">
                        @if (count($educatorInterestForms) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead>
                                    <th>Form Id</th><th>Name</th><th>Email</th><th>Action</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($educatorInterestForms as $educatorInterestForm)
                                        <tr>
                                            <td class="table-text"><div>{{ $educatorInterestForm->id }}</div></td>
                                            <td class="table-text"><div>{{ $educatorInterestForm->first_name }}</div></td>
                                            <td class="table-text"><div>{{ $educatorInterestForm->email }}</div></td>
                                            <td>
                                                <a href="{{ action('AdminController@showEducatorDetails', $educatorInterestForm->id) }}" class="btn btn-default btn-small">View
                                                    Details</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Educator Form Records found</h4></div>
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