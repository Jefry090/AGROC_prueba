<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Date', $sale->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto_total') }}
            {{ Form::text('Amount_Total', $sale->Amount_Total, ['class' => 'form-control' . ($errors->has('Amount_Total') ? ' is-invalid' : ''), 'placeholder' => 'Monto total']) }}
            {!! $errors->first('Amount_Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Almacén') }}
            {{ Form::text('id_warehouses', $sale->id_warehouses, ['class' => 'form-control' . ($errors->has('id_warehouses') ? ' is-invalid' : ''), 'placeholder' => 'Id Almacén']) }}
            {!! $errors->first('id_warehouses', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
