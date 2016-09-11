
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading" style="height: 50px;">
            <div class="pull-left">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseComment" class="">Comments ({{ $comments->count() }})</a></h4>
            </div>
            @if ($CRUD_Action == "Update")
            <div class="pull-right" data-toggle="tooltip" title="{{$skeletalelement->comments->count()}} - Comments(s)">
                @if($commentfor == "SkeletalElement")
                    <a href="{{ URL::route('comments.addforskeletalelement', $skeletalelement->id,['method' => 'GET']) }}" class="btn btn-primary"><i class="fa fa-btn fa-comment"></i>Add Comment</a>
                @endif
            </div>
            @endif
        </div>
        <div id="collapseComment" class="panel-collapse collapse in">
            @if ($comments->count() > 0)
                <table class="table comments-table">
                    <thead> <!-- Table Headings -->
                    <th>Comment</th><th>User</th><th>Date</th><th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($comments as $comment)
                        <fieldset>
                            <tr class="comment">
                                <td class="comment"><div class="form-group">
                                        <div class="col-lg-8">{{ Form::textarea('comments['.$comment->id.'][text]', $comment->text, ['class' => 'comment', 'rows' => 2]) }}</div>
                                    </div></td>
                                <td><div class="form-group">
                                        <div class="col-lg-2">{{ Form::text('courses['.$comment->id.'][user]', $comment->user->name, ['class' => 'user']) }}</div>
                                    </div></td>
                                <td><div class="form-group">
                                        <div class="col-lg-2">{{ Form::date('courses['.$comment->id.'][date]', $comment->created_at, ['class' => 'created_at']) }}</div>
                                    </div></td>
                                <td>
                                    @if($user->id == $comment->user_id)
                                        <div class="pull-right" style="height: 25px;">
                                            @if ($CRUD_Action == "Update")
                                            <a href="{{ URL::route('comments.edit', ['id' => $comment->id, 'method' => 'GET']) }}" class="edit-comment btn btn-default"><i class="fa fa-edit"></i></a>
                                            <form action="{{ url('comments/'.$comment->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('delete') }}
                                                <button type="submit" id="delete-comment-{{ $comment->id }}" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                            </form>
                                            @endif
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        </fieldset>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
