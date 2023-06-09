<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Name', $post->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_producto') }}
            {{ Form::text('Type_Product', $post->Type_Product, ['class' => 'form-control' . ($errors->has('Type_Product') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Producto']) }}
            {!! $errors->first('Type_Product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Price', $post->Price, ['class' => 'form-control' . ($errors->has('Price') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('description', $post->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Archivos') }}
            {{ Form::text('Archives', $post->Archives, ['class' => 'form-control' . ($errors->has('Archives') ? ' is-invalid' : ''), 'placeholder' => 'Archivos']) }}
            {!! $errors->first('Archives', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('Date', $post->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_perfil') }}
            {{ Form::text('id_profiles', $post->id_profiles, ['class' => 'form-control' . ($errors->has('id_profiles') ? ' is-invalid' : ''), 'placeholder' => 'Id perfil']) }}
            {!! $errors->first('id_profiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
