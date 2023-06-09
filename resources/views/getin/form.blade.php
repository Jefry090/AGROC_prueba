<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Date', $getin->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Quantity', $getin->Quantity, ['class' => 'form-control' . ($errors->has('Quantity') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Cultivo') }}
            {{ Form::text('id_crops', $getin->id_crops, ['class' => 'form-control' . ($errors->has('id_crops') ? ' is-invalid' : ''), 'placeholder' => 'Id Cultivo']) }}
            {!! $errors->first('id_crops', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_producto') }}
            {{ Form::text('id_product', $getin->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Suministro') }}
            {{ Form::text('id_supplies', $getin->id_supplies, ['class' => 'form-control' . ($errors->has('id_supplies') ? ' is-invalid' : ''), 'placeholder' => 'Id Suministro']) }}
            {!! $errors->first('id_supplies', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_animal') }}
            {{ Form::text('id_animal', $getin->id_animal, ['class' => 'form-control' . ($errors->has('id_animal') ? ' is-invalid' : ''), 'placeholder' => 'Id Animal']) }}
            {!! $errors->first('id_animal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_maquinaria') }}
            {{ Form::text('id_machineries', $getin->id_machineries, ['class' => 'form-control' . ($errors->has('id_machineries') ? ' is-invalid' : ''), 'placeholder' => 'Id maquinaria']) }}
            {!! $errors->first('id_machineries', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
