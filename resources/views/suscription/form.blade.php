<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Type_Suscription') }}
            {{ Form::text('Type_Suscription', $suscription->Type_Suscription, ['class' => 'form-control' . ($errors->has('Type_Suscription') ? ' is-invalid' : ''), 'placeholder' => 'Type Suscription']) }}
            {!! $errors->first('Type_Suscription', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Time') }}
            {{ Form::text('Time', $suscription->Time, ['class' => 'form-control' . ($errors->has('Time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('Time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $suscription->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('Description', $suscription->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_profiles') }}
            {{ Form::text('id_profiles', $suscription->id_profiles, ['class' => 'form-control' . ($errors->has('id_profiles') ? ' is-invalid' : ''), 'placeholder' => 'Id Profiles']) }}
            {!! $errors->first('id_profiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>