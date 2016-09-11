<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')
    @include('common.flash')
    <table class="table user-table" style="margin-bottom: 0px;">
        <tbody>
        @if ($CRUD_Action == 'Create' || $CRUD_Action == 'Update')
            <tr>
                <td><div class="form-group">
                    <div class="col-lg-1">{!! Form::label('text', 'Tag', ['class' => 'control-label']) !!}</div>
                    <div class="col-lg-12">{!! Form::textarea('text', null, ['class' => 'form-control', 'required' => 'required']) !!}</div>
                    <div>
                        {{ Form::hidden('user_id', $user->id, ['id'=>'user_id']) }}
                        @if($tagfor == "SkeletalElement")
                            {{ Form::hidden('tagfor', 'SkeletalElement', ['id'=>'tagfor']) }}
                            {{ Form::hidden('skeletalelement_id', $skeletalelement->id, ['id'=>'skeletalelement_id']) }}
                        @endif

                    </div>
                </div></td>
            </tr>
        @elseif ($CRUD_Action == 'View')
            {!! Form::label('text', 'Text: '.$tag->text) !!}
            {!! Form::label('created_by', 'Created By: '.$tag->created_by) !!}
            {!! Form::label('created_at', 'Created At: '.$tag->created_at) !!}
            {!! Form::label('updated_by', 'Updated By: '.$tag->updated_by) !!}
            {!! Form::label('updated_at', 'Updated At: '.$tag->updated_at) !!}
        @endif
        </tbody>
    </table>
</div>
