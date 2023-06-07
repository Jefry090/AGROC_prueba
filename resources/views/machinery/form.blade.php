<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Type') }}
            {{ Form::text('Type', $machinery->Type, ['class' => 'form-control' . ($errors->has('Type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('Type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Model') }}
            {{ Form::text('Model', $machinery->Model, ['class' => 'form-control' . ($errors->has('Model') ? ' is-invalid' : ''), 'placeholder' => 'Model']) }}
            {!! $errors->first('Model', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Brand') }}
            {{ Form::text('Brand', $machinery->Brand, ['class' => 'form-control' . ($errors->has('Brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand']) }}
            {!! $errors->first('Brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('YearManuFactured') }}
            {{ Form::text('YearManuFactured', $machinery->YearManuFactured, ['class' => 'form-control' . ($errors->has('YearManuFactured') ? ' is-invalid' : ''), 'placeholder' => 'Yearmanufactured']) }}
            {!! $errors->first('YearManuFactured', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Status') }}
            {{ Form::text('Status', $machinery->Status, ['class' => 'form-control' . ($errors->has('Status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('Status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>