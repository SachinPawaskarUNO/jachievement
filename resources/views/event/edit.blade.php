@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div class="pull-right">
                            <form action="{{ url('events/'.$campaign->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                                <button type="submit" id="delete" class="btn btn-default">Delete</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"> <b>{{ $heading }}</b></div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($campaign, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['CampaignController@update', $campaign->id]]) !!}
                        @include('common.errors')
                        @include('common.flash')
                        @include ('event.partial', ['CRUD_Action' => 'Update'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection