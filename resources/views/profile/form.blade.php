<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('User_Rol') }}
            {{ Form::text('User_Rol', $profile->User_Rol, ['class' => 'form-control' . ($errors->has('User_Rol') ? ' is-invalid' : ''), 'placeholder' => 'User Rol']) }}
            {!! $errors->first('User_Rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_users') }}
            {{ Form::text('id_users', $profile->id_users, ['class' => 'form-control' . ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => 'Id Users']) }}
            {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>