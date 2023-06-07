<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_sales') }}
            {{ Form::text('id_sales', $output->id_sales, ['class' => 'form-control' . ($errors->has('id_sales') ? ' is-invalid' : ''), 'placeholder' => 'Id Sales']) }}
            {!! $errors->first('id_sales', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>