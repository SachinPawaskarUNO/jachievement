@extends('layouts.app')
@section('content')
<style>
comments .commentAdd {
    display: table;
    height: 100%;
    width: 100%;
    margin: 0 1.5rem 1rem 1.5rem;
    div[class^='col-sm'] {
        display: table-cell;
        height: 100%;
        float: none;
    }
    img {
    }
    input {
        width: 100%;
        max-width: none;
    }
    button {
        color: #FFFFFF;
    }
}

comments .commentTable {
    font-family: Calibri, sans-serif;
    font-size: 1.3214em;
    font-weight: 100;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
    table {
        width: 100%;
    }
    thead, tbody, th, td {
        border-color: #DCDCDC;
        text-align: left;
    }
    .commentTopRow {
        font-weight: 900;
        margin-top: .5rem;
    }
    .commentMiddleRow {

    }
    .commentBottomRow {
        color: #ADADAD;
        font-size: .8571em;
        font-style: italic;
    }

    .commentUserName {

    }
}

div.namebox {    
    border: 1px solid black;
}

div.bigbox {
    border: 2px solid black;
}

div.smallbox {
    border: 1px;
}
</style>


    <div class="container">
         <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#5cb85c !important;">
                    <div style="font-size:1.2em;color:white;"><b>Hints and Tips</b></div>
                </div>
            </div>
               
       {!! Form::open(['url' => '/hints/view', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
            @include('common.errors')
            @include('common.flash')
        <div class="commentAdd">
            <div class="col-sm-1">
                    <img class="img-rounded"/>
            </div>
                <div class="col-sm-6">
                    <input name="text" id="text" type="text" class="form-control" placeholder="Type your message here..." />
                </div>

                <div class="form-group{{ $errors->has('programs') ? ' has-error' : '' }}">

                    <div class="col-md-3">
                        {!! Form::select('program_id', $programs, null,  ['id'=> 'program_id','class' => 'col-sm-3 form-control']) !!}
                        @if ($errors->has('program_id'))
                            <span class="help-block"><strong>{{ $errors->first('program_id') }}</strong></span>
                        @endif
              
                    </div>
                </div>

        </div>

             <div class="col-sm-2">
                 {!! Form::button('Add Comment', ['type' => 'submit','id'=>'save', 'class' => 'btn btn-success']) !!}
             </div>

        {!! Form::close() !!}  

     
    
        @if (count($comments_data1) > 0)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br>
              
               
                        <div class="panel-body bigbox">
                            @foreach ($comments_data1 as $comment)
                            <div class="panel-body smallbox">
                                <div class="col-md-2 namebox"  ><div>{{ $comment->first_name }}</div></div>
                                <div class="col-md-7">{{ $comment->text }} <br>{{ $comment->created_at }}</div>
                                <div class="col-md-3">{{ $comment->name}}</div>  
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        @endif
    </div>
</div>
@stop

