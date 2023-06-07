<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('DateTime') }}
            {{ Form::text('DateTime', $chat->DateTime, ['class' => 'form-control' . ($errors->has('DateTime') ? ' is-invalid' : ''), 'placeholder' => 'Datetime']) }}
            {!! $errors->first('DateTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Text') }}
            {{ Form::text('Text', $chat->Text, ['class' => 'form-control' . ($errors->has('Text') ? ' is-invalid' : ''), 'placeholder' => 'Text']) }}
            {!! $errors->first('Text', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Images') }}
            {{ Form::text('Images', $chat->Images, ['class' => 'form-control' . ($errors->has('Images') ? ' is-invalid' : ''), 'placeholder' => 'Images']) }}
            {!! $errors->first('Images', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Videos') }}
            {{ Form::text('Videos', $chat->Videos, ['class' => 'form-control' . ($errors->has('Videos') ? ' is-invalid' : ''), 'placeholder' => 'Videos']) }}
            {!! $errors->first('Videos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Audios') }}
            {{ Form::text('Audios', $chat->Audios, ['class' => 'form-control' . ($errors->has('Audios') ? ' is-invalid' : ''), 'placeholder' => 'Audios']) }}
            {!! $errors->first('Audios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_profiles') }}
            {{ Form::text('id_profiles', $chat->id_profiles, ['class' => 'form-control' . ($errors->has('id_profiles') ? ' is-invalid' : ''), 'placeholder' => 'Id Profiles']) }}
            {!! $errors->first('id_profiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_post') }}
            {{ Form::text('id_post', $chat->id_post, ['class' => 'form-control' . ($errors->has('id_post') ? ' is-invalid' : ''), 'placeholder' => 'Id Post']) }}
            {!! $errors->first('id_post', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>