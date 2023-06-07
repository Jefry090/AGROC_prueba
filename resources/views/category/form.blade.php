<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $category->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('section') }}
            {{ Form::text('section', $category->section, ['class' => 'form-control' . ($errors->has('section') ? ' is-invalid' : ''), 'placeholder' => 'Section']) }}
            {!! $errors->first('section', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piture') }}
            {{ Form::text('piture', $category->piture, ['class' => 'form-control' . ($errors->has('piture') ? ' is-invalid' : ''), 'placeholder' => 'Piture']) }}
            {!! $errors->first('piture', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_post') }}
            {{ Form::text('id_post', $category->id_post, ['class' => 'form-control' . ($errors->has('id_post') ? ' is-invalid' : ''), 'placeholder' => 'Id Post']) }}
            {!! $errors->first('id_post', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>