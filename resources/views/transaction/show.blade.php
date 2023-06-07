@extends('layouts.app')

@section('template_title')
    {{ $transaction->name ?? "{{ __('Show') Transaction" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transaction</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $transaction->Start_Date }}
                        </div>
                        <div class="form-group">
                            <strong>Amount Paid:</strong>
                            {{ $transaction->Amount_Paid }}
                        </div>
                        <div class="form-group">
                            <strong>Transaction Status:</strong>
                            {{ $transaction->Transaction_Status }}
                        </div>
                        <div class="form-group">
                            <strong>Id Paymentmethods:</strong>
                            {{ $transaction->id_PaymentMethods }}
                        </div>
                        <div class="form-group">
                            <strong>Id Suscription:</strong>
                            {{ $transaction->id_Suscription }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
