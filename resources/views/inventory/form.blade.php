<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Total_Cost') }}
            {{ Form::text('Total_Cost', $inventory->Total_Cost, ['class' => 'form-control' . ($errors->has('Total_Cost') ? ' is-invalid' : ''), 'placeholder' => 'Total Cost']) }}
            {!! $errors->first('Total_Cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cost_unit') }}
            {{ Form::text('Cost_unit', $inventory->Cost_unit, ['class' => 'form-control' . ($errors->has('Cost_unit') ? ' is-invalid' : ''), 'placeholder' => 'Cost Unit']) }}
            {!! $errors->first('Cost_unit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Quantity') }}
            {{ Form::text('Quantity', $inventory->Quantity, ['class' => 'form-control' . ($errors->has('Quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('Quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Date_Input') }}
            {{ Form::text('Date_Input', $inventory->Date_Input, ['class' => 'form-control' . ($errors->has('Date_Input') ? ' is-invalid' : ''), 'placeholder' => 'Date Input']) }}
            {!! $errors->first('Date_Input', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_warehouses') }}
            {{ Form::text('id_warehouses', $inventory->id_warehouses, ['class' => 'form-control' . ($errors->has('id_warehouses') ? ' is-invalid' : ''), 'placeholder' => 'Id Warehouses']) }}
            {!! $errors->first('id_warehouses', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>