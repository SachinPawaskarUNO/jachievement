@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('organizations/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-organization" class="btn btn-default">Create</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')
                        @if (count($organizations) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    <th>Organization Name</th>
                                    <th>URL</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($organizations as $organization)
                                        <tr>
                                            <td class="table-text">
                                                <div>
                                                    <a href="{{ url('/organizations/'.$organization->id.'/edit') }}">{{ $organization->name }}</a>
                                                </div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{ $organization->url }}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Organization records found</h4></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <style>
        .table td {
            border: 0px !important;
        }

        .tooltip-inner {
            white-space: pre-wrap;
            max-width: 400px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $('table.cds-datatable').on('draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto'});
            });

            $('tr').tooltip({html: true, placement: 'auto'});
        });
    </script>
@endsection