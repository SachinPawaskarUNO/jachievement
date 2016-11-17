<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')
    @include('common.flash')
    <table class="table user-table" style="margin-bottom: 0px;">
        <tbody>
        @if ($CRUD_Action == 'Create' || $CRUD_Action == 'Update')
            <tr>
                <td><div class="form-group">
                    <div class="col-lg-1">{!! Form::label('text', 'Comment', ['class' => 'control-label']) !!}</div>
                    <div class="col-lg-12">{!! Form::textarea('text', null, ['class' => 'form-control', 'required' => 'required']) !!}</div>
                    <div>
                       
                       

                    </div>
                </div></td>
            </tr>
        @elseif ($CRUD_Action == 'View')
            {!! Form::label('text', 'Text: '.$comment->text) !!}
            {!! Form::label('created_by', 'Created By: '.$comment->created_by) !!}
            {!! Form::label('created_at', 'Created At: '.$comment->created_at) !!}
            {!! Form::label('updated_by', 'Updated By: '.$comment->updated_by) !!}
            {!! Form::label('updated_at', 'Updated At: '.$comment->updated_at) !!}
        @endif
        </tbody>
    </table>
</div>
