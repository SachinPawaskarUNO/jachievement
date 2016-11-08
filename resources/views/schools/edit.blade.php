@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="{{ url('schools/'.$school->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                                <button type="submit" id="delete" class="btn btn-default btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                            </form>
                        </div>
                        <div><h4>{{ $heading }}</h4></div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($school, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['SchoolController@update', $school->id]]) !!}
                        @include('common.errors')
                        @include('common.flash')

                        @include ('schools.partial', ['CRUD_Action' => 'Update'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection