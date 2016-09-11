
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading" style="height: 50px;">
            <div class="pull-left">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTag" class="">Tags ({{ $skeletalelement->tags->count() }})</a></h4>
            </div>
        </div>
        <div id="collapseTag" class="panel-collapse collapse in">
            <div class="col-lg-12 form-group tags">
                {{--{!! Form::label('taglist', 'Tags:') !!}--}}
                {!! Form::select('taglist[]', $tags, null, ['class' => 'form-control tags', 'multiple', 'style' => 'width: 50%; margin-top: 10px;']) !!}
            </div>
        </div>
    </div>
</div>
