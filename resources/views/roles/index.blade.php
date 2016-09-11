@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="{{ url('roles/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                            </form>
                        </div>
                        <div><h4>{{ $heading }}</h4></div>
                    </div>
                    <div class="panel-body">
                        @if (count($roles) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    <th>Name</th><th>Display Name</th><th>Description</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($roles as $role)
                                        <tr>
                                            {{--<td class="table-text"><div><a href="{{ url('/roles/'.$role->id.'/edit') }}">{{ $role->name }}</a></div></td>--}}
                                            <td class="table-text"><div>{{ $role->name }}</div></td>
                                            <td class="table-text"><div><a href="{{ url('/roles/'.$role->id.'/edit') }}">{{ $role->display_name }}</a></div></td>
                                            <td class="table-text"><div>{{ $role->description }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Role Records found</h4></div>
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