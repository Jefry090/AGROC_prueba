<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $post->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Type_Product') }}
            {{ Form::text('Type_Product', $post->Type_Product, ['class' => 'form-control' . ($errors->has('Type_Product') ? ' is-invalid' : ''), 'placeholder' => 'Type Product']) }}
            {!! $errors->first('Type_Product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Price') }}
            {{ Form::text('Price', $post->Price, ['class' => 'form-control' . ($errors->has('Price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('Price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $post->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Archives') }}
            {{ Form::text('Archives', $post->Archives, ['class' => 'form-control' . ($errors->has('Archives') ? ' is-invalid' : ''), 'placeholder' => 'Archives']) }}
            {!! $errors->first('Archives', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::text('Date', $post->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_profiles') }}
            {{ Form::text('id_profiles', $post->id_profiles, ['class' => 'form-control' . ($errors->has('id_profiles') ? ' is-invalid' : ''), 'placeholder' => 'Id Profiles']) }}
            {!! $errors->first('id_profiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>