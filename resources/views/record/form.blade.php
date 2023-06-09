<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Date', $record->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('Description', $record->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'descripción']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_entrada') }}
            {{ Form::text('id_getins', $record->id_getins, ['class' => 'form-control' . ($errors->has('id_getins') ? ' is-invalid' : ''), 'placeholder' => 'Id Entrada']) }}
            {!! $errors->first('id_getins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_venta') }}
            {{ Form::text('id_sales', $record->id_sales, ['class' => 'form-control' . ($errors->has('id_sales') ? ' is-invalid' : ''), 'placeholder' => 'Id Ventas']) }}
            {!! $errors->first('id_sales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_salidas') }}
            {{ Form::text('id_outputs', $record->id_outputs, ['class' => 'form-control' . ($errors->has('id_outputs') ? ' is-invalid' : ''), 'placeholder' => 'Id Salidas']) }}
            {!! $errors->first('id_outputs', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
