<div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
    {!! Form::label('question', 'Question:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::textarea('question', null, ['class' => 'col-md-6 form-control', 'rows' => '5']) !!}
        @if ($errors->has('question'))
            <span class="help-block">
                <strong>{{ $errors->first('question') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
    {!! Form::label('answer', 'Answer:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::textarea('answer', null, ['class' => 'col-md-6 form-control', 'rows' => '5']) !!}
        @if ($errors->has('answer'))
            <span class="help-block">
                <strong>{{ $errors->first('answer') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'Category:', ['class' => 'col-md-4 control-label']) !!}
	<span style="color:red;">*</span>
    <div class="col-md-6">
        {!! Form::text('category', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('category'))
            <span class="help-block">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
        <a class="btn btn-default" href="{{ action('FAQController@index') }}">Cancel</a>
    </div>
</div>
