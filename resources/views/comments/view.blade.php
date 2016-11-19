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
</style>


  <div class="container">
        <div class="row">




                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div style="font-size:1.2em;color:white;"><b>Hints and Tips</b></div>
                    </div>
                     </div>
                    <br>

    <div class="commentAdd">
        <div class="col-sm-1">
            <img class="img-rounded"/>
        </div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Type your message here..." />
        </div>
        <div class="col-sm-2">
            <button class="btn btn-cons" title="Add Comment">Add Comment</button>
        </div>
    </div>
     
    
@if (count($comments_data1) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
       
            
        </div>
        <div class="panel-body">
            <table class="table table-striped cds-datatable">
                <thead><th>Comment</th><th>User</th><th>Date</th><th>Program</th></thead><!-- Table Headings -->
                <tbody> <!-- Table Body -->
                @foreach ($comments_data1 as $comment)
                    <tr>
                        
                        <td class="table-text"><div>{{ $comment->text }}</div></td>
                        <td class="table-text"><div>{{ $comment->first_name }}</div></td>
                        <td class="table-text"><div>{{ $comment->created_at }}</div></td>
                        <td class="table-text"><div>{{ $comment->name}}</div></td>


                   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
          </div>
    </div>
@endif
@stop
