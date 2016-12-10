@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('users/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-user" class="btn btn-default">Create</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')

                        @if (count($users) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="table-text">
                                                <div>
                                                    <a href="{{ url('/users/'.$user->id.'/edit') }}">{{ $user->first_name }} {{$user->last_name}}</a>
                                                </div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{ $user->email }}</div>
                                            </td>
                                            @if ($user->active)
                                                <td class="table-text">
                                                    <div>Active</div>
                                                </td>@else
                                                <td class="table-text">
                                                    <div>InActive</div>
                                                </td>@endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No User Records found</h4></div>
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