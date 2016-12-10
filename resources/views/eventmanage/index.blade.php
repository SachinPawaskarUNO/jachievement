@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('events/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-event" class="btn btn-default">Create</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')
                        @if (count($events) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    <th>Event Name</th>
                                    <th>Event Description</th>
                                    <th>Event Date</th>
                                    <th>Event Venue</th>
                                    <th>Status</th>
                                    <th>Event Type</th
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($events as $event)
                                        <tr>
                                            <td class="table-text">
                                                <div>
                                                    <a href="{{ url('/events/'.$event->id.'/edit') }}">{{ $event->name }}</a>
                                                </div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{ $event->description }}</div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{$event->event_date}}</div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{ $event->venue }}</div>
                                            </td>
                                            @if ($event->active)
                                                <td class="table-text">
                                                    <div>Active</div>
                                                </td>@else
                                                <td class="table-text">
                                                    <div>Inactive</div>
                                                </td>@endif
                                            @if ($event->create_team)
                                                <td class="table-text">
                                                    <div>Other Event</div>
                                                </td>@else
                                                <td class="table-text">
                                                    <div>Golf Event</div>
                                                </td>@endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Event records found</h4></div>
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