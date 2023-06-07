<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $crop->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Type') }}
            {{ Form::text('Type', $crop->Type, ['class' => 'form-control' . ($errors->has('Type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('Type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Quantity') }}
            {{ Form::text('Quantity', $crop->Quantity, ['class' => 'form-control' . ($errors->has('Quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('Quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Datesowing') }}
            {{ Form::text('Datesowing', $crop->Datesowing, ['class' => 'form-control' . ($errors->has('Datesowing') ? ' is-invalid' : ''), 'placeholder' => 'Datesowing']) }}
            {!! $errors->first('Datesowing', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>