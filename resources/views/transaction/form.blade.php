<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Start_Date') }}
            {{ Form::text('Start_Date', $transaction->Start_Date, ['class' => 'form-control' . ($errors->has('Start_Date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date']) }}
            {!! $errors->first('Start_Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Amount_Paid') }}
            {{ Form::text('Amount_Paid', $transaction->Amount_Paid, ['class' => 'form-control' . ($errors->has('Amount_Paid') ? ' is-invalid' : ''), 'placeholder' => 'Amount Paid']) }}
            {!! $errors->first('Amount_Paid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Transaction_Status') }}
            {{ Form::text('Transaction_Status', $transaction->Transaction_Status, ['class' => 'form-control' . ($errors->has('Transaction_Status') ? ' is-invalid' : ''), 'placeholder' => 'Transaction Status']) }}
            {!! $errors->first('Transaction_Status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_PaymentMethods') }}
            {{ Form::text('id_PaymentMethods', $transaction->id_PaymentMethods, ['class' => 'form-control' . ($errors->has('id_PaymentMethods') ? ' is-invalid' : ''), 'placeholder' => 'Id Paymentmethods']) }}
            {!! $errors->first('id_PaymentMethods', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Suscription') }}
            {{ Form::text('id_Suscription', $transaction->id_Suscription, ['class' => 'form-control' . ($errors->has('id_Suscription') ? ' is-invalid' : ''), 'placeholder' => 'Id Suscription']) }}
            {!! $errors->first('id_Suscription', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>