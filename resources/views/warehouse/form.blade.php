<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $warehouse->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $warehouse->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Capacity') }}
            {{ Form::text('Capacity', $warehouse->Capacity, ['class' => 'form-control' . ($errors->has('Capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacity']) }}
            {!! $errors->first('Capacity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_getins') }}
            {{ Form::text('id_getins', $warehouse->id_getins, ['class' => 'form-control' . ($errors->has('id_getins') ? ' is-invalid' : ''), 'placeholder' => 'Id Getins']) }}
            {!! $errors->first('id_getins', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>