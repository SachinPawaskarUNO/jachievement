@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"> <span style="font-size:1.2em;color:white;"><b>Volunteer Interest Form</b></span></div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/volunteers/interestform', 'class' => 'form-horizontal', 'method' => 'POST']) !!}{{ csrf_field() }}
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
    $("#elementarySchoolProgram").click(function () {
        $(".check1").prop('checked', $(this).prop('checked'));
    });

    $("#middleGradesProgram").click(function () {
        $(".check2").prop('checked', $(this).prop('checked'));
    });

    $("#highSchoolProgram").click(function () {
        $(".check3").prop('checked', $(this).prop('checked'));
    });
</script>
@endsection