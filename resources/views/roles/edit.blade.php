@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('roles/'.$role->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                             {{$show_delete}}
                            @if($show_delete == 'true') {


                                <button type="submit" id="delete" class="btn btn-default">Delete</button>
                            }
                            @endIf
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($role, ['method' => 'PATCH', 'action' => ['RolesController@update', $role->id], 'class' => 'form-horizontal', 'onsubmit' => 'return validateOnSave();']) !!}

                        @include('common.errors')
                        @include('common.flash')

                        @include ('roles.partial', ['CRUD_Action' => 'Update'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).ready(function($) {
            $('select').select2();
        });

        function validateOnSave() {
            var rc = true;
            if ($("select#sb_id").val() === "") {
                alert("Please select a Type");
                rc = false;
            } else if ($("input#x_number").val() === "") {
                alert("Please input a X-number");
                rc = false;
            }
            return rc;
        }

    </script>
@endsection
