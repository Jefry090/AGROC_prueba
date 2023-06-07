<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::text('Date', $getin->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Quantity') }}
            {{ Form::text('Quantity', $getin->Quantity, ['class' => 'form-control' . ($errors->has('Quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('Quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_crops') }}
            {{ Form::text('id_crops', $getin->id_crops, ['class' => 'form-control' . ($errors->has('id_crops') ? ' is-invalid' : ''), 'placeholder' => 'Id Crops']) }}
            {!! $errors->first('id_crops', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::text('id_product', $getin->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_supplies') }}
            {{ Form::text('id_supplies', $getin->id_supplies, ['class' => 'form-control' . ($errors->has('id_supplies') ? ' is-invalid' : ''), 'placeholder' => 'Id Supplies']) }}
            {!! $errors->first('id_supplies', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_animal') }}
            {{ Form::text('id_animal', $getin->id_animal, ['class' => 'form-control' . ($errors->has('id_animal') ? ' is-invalid' : ''), 'placeholder' => 'Id Animal']) }}
            {!! $errors->first('id_animal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_machineries') }}
            {{ Form::text('id_machineries', $getin->id_machineries, ['class' => 'form-control' . ($errors->has('id_machineries') ? ' is-invalid' : ''), 'placeholder' => 'Id Machineries']) }}
            {!! $errors->first('id_machineries', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>