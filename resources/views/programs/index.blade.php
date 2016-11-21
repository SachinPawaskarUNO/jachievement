@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('programs/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-school" class="btn btn-default">Create</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')
                        @if (count($programs) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    <th>Program Name</th><th>Program Implementation</th><th>Grade Level</th><th>Program Description</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($programs as $program)
                                        <tr>
                                            <td class="table-text"><div><a href="{{ url('/programs/'.$program->id.'/edit') }}">{{ $program->name }}</a></div></td>
                                            <td class="table-text"><div>{{ $program->implementation }}</div></td>
                                            <td class="table-text"><div>
                                                    @if ($program->grade_id ==1)
                                                        Elementary School
                                                    @elseif($program->grade_id == 2)
                                                        Middle School
                                                    @else
                                                        High School
                                                    @endif
                                                    </div></td>
                                            <td class="table-text"><div>{{ $program->description }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Program records found</h4></div>
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