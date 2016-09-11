@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="{{ url('users/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-user" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                            </form>
                        </div>
                        <div><h4>{{ $heading }}</h4></div>
                    </div>
                    <div class="panel-body">
                        @if (count($users) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped cds-datatable">
                                <thead> <!-- Table Headings -->
                                {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                <th>User</th><th>Email</th><th>Status</th>
                                </thead>
                                <tbody> <!-- Table Body -->
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="table-text"><div><a href="{{ url('/users/'.$user->id.'/edit') }}">{{ $user->name }}</a></div></td>
                                        <td class="table-text"><div>{{ $user->email }}</div></td>
                                        @if ($user->active)<td class="table-text"><div>Active</div></td>@else<td class="table-text"><div>InActive</div></td>@endif
                                        {{--<td>--}}
                                            {{--@if($user->id != 1) <!-- Administrator User -->--}}
                                            {{--<div class="pull-right" style="height: 25px;">--}}
                                                {{--<form action="{{ url('users/'.$user->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}--}}
                                                    {{--<button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-default"><i class="fa fa-trash"></i></button>--}}
                                                {{--</form>--}}
                                            {{--</div>--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
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