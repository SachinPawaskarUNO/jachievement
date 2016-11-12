@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="{{ url('event/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-event" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                            </form>
                        </div>
                        <div><h4>{{ $heading }}</h4></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')
                        @if (count($campaigns) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    <th>Event Name</th><th>Event Date</th><th>Venue</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($campaigns as $campaign)
                                        <tr>
                                            <td class="table-text"><div><a href="{{ url('/event/'.$campaign->id.'/edit') }}">{{ $campaign->name }}</a></div></td>
                                            <td class="table-text"><div>{{ $campaign->event_date }}</div></td>
                                            <td class="table-text"><div>{{ $campaign->venue }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No event records found</h4></div>
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