<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('name'))
            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
    {!! Form::label('display_name', 'Display Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('display_name', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('display_name'))
            <span class="help-block"><strong>{{ $errors->first('display_name') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Description:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('description'))
            <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Permissions</label>
    <div class="col-md-6">{!! Form::select('permissionlist[]', $list_permission, null, ['class' => 'form-control roles cds-select', 'multiple', 'style' => 'width: 50%; margin-top: 10px;']) !!}</div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
    </div>
</div>

