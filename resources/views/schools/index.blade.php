@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="{{ url('schools/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-school" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                        <div><h4>{{ $heading }}</h4></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')
                        @if (count($schools) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped cds-datatable">
                                <thead> <!-- Table Headings -->
                                <th>School Name</th><th>School Address</th><th>Status</th>
                                </thead>
                                <tbody> <!-- Table Body -->
                                @foreach ($schools as $school)
                                    <tr>
                                        <td class="table-text"><div><a href="{{ url('/schools/'.$school->id.'/edit') }}">{{ $school->school_name }}</a></div></td>
                                        <td class="table-text"><div>{{ $school->school_address }}, {{ $school->school_city }}</div></td>
                                        @if ($school->active)<td class="table-text"><div>Active</div></td>@else<td class="table-text"><div>Inactive</div></td>@endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <div class="panel-body"><h4>No School records found</h4></div>
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