<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Security_Code') }}
            {{ Form::text('Security_Code', $paymentMethod->Security_Code, ['class' => 'form-control' . ($errors->has('Security_Code') ? ' is-invalid' : ''), 'placeholder' => 'Security Code']) }}
            {!! $errors->first('Security_Code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Card_Holder') }}
            {{ Form::text('Card_Holder', $paymentMethod->Card_Holder, ['class' => 'form-control' . ($errors->has('Card_Holder') ? ' is-invalid' : ''), 'placeholder' => 'Card Holder']) }}
            {!! $errors->first('Card_Holder', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Card_Number') }}
            {{ Form::text('Card_Number', $paymentMethod->Card_Number, ['class' => 'form-control' . ($errors->has('Card_Number') ? ' is-invalid' : ''), 'placeholder' => 'Card Number']) }}
            {!! $errors->first('Card_Number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Card_Type') }}
            {{ Form::text('Card_Type', $paymentMethod->Card_Type, ['class' => 'form-control' . ($errors->has('Card_Type') ? ' is-invalid' : ''), 'placeholder' => 'Card Type']) }}
            {!! $errors->first('Card_Type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Due_Date') }}
            {{ Form::text('Due_Date', $paymentMethod->Due_Date, ['class' => 'form-control' . ($errors->has('Due_Date') ? ' is-invalid' : ''), 'placeholder' => 'Due Date']) }}
            {!! $errors->first('Due_Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>