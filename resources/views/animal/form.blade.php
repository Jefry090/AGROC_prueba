<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $animal->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Breed') }}
            {{ Form::text('Breed', $animal->Breed, ['class' => 'form-control' . ($errors->has('Breed') ? ' is-invalid' : ''), 'placeholder' => 'Breed']) }}
            {!! $errors->first('Breed', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DateBorn') }}
            {{ Form::text('DateBorn', $animal->DateBorn, ['class' => 'form-control' . ($errors->has('DateBorn') ? ' is-invalid' : ''), 'placeholder' => 'Dateborn']) }}
            {!! $errors->first('DateBorn', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>