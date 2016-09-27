@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Volunteer Interest Form</div>

                    <div class="panel-body">

                        {!! Form::open(['url' => '/volunteers/interestform', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                        @include('common.errors')
                        @include('common.flash')

                        @include ('volunteers.partial')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $("#$gradeProgram->grade_id").change(function () {
            $("#checkboxes input:checkbox").prop('checked', $(this).prop("checked"));
        });
    </script>
@endsection