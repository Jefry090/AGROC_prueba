<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Time') }}
            {{ Form::text('Time', $bill->Time, ['class' => 'form-control' . ($errors->has('Time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('Time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Type_Bagde') }}
            {{ Form::text('Type_Bagde', $bill->Type_Bagde, ['class' => 'form-control' . ($errors->has('Type_Bagde') ? ' is-invalid' : ''), 'placeholder' => 'Type Bagde']) }}
            {!! $errors->first('Type_Bagde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cost') }}
            {{ Form::text('cost', $bill->cost, ['class' => 'form-control' . ($errors->has('cost') ? ' is-invalid' : ''), 'placeholder' => 'Cost']) }}
            {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_transaction') }}
            {{ Form::text('id_transaction', $bill->id_transaction, ['class' => 'form-control' . ($errors->has('id_transaction') ? ' is-invalid' : ''), 'placeholder' => 'Id Transaction']) }}
            {!! $errors->first('id_transaction', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>