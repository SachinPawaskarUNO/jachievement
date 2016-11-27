@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></span></div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped cds-datatable">
                                <thead> <!-- Table Headings -->
                                <th>ID</th><th>IP Address</th><th>User</th><th>Device</th><th>Browser</th><th>Access Date</th>
                                </thead>
                                <tbody> <!-- Table Body -->
                                @foreach ($viewers as $viewer)
                                    <tr>
                                        <td class="table-text"><div>{{ $viewer->id }}</div></td>
                                        <td class="table-text"><div>{{ $viewer->client_ip }}</div></td>
                                        <td class="table-text"><div>
                                        @if ($viewer->user)
                                            {{ $viewer->user }}
                                        @else
                                            guest
                                        @endif
                                            </div></td>
                                        <td class="table-text"><div>{{ $viewer->device_kind }} [{{ $viewer->device_model }}] [{{ $viewer->device_platform }} {{ $viewer->device_platform_model }}]</div></td>
                                        <td class="table-text"><div>{{ $viewer->agent_browser }} ({{ $viewer->agent_browser_version }}) </div></td>
                                        <td class="table-text"><div>{{ $viewer->updated_at }}</div></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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