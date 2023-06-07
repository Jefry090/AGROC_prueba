@extends('layouts.app')

@section('template_title')
    {{ $paymentMethod->name ?? "{{ __('Show') Payment Method" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Payment Method</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('payment-methods.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Security Code:</strong>
                            {{ $paymentMethod->Security_Code }}
                        </div>
                        <div class="form-group">
                            <strong>Card Holder:</strong>
                            {{ $paymentMethod->Card_Holder }}
                        </div>
                        <div class="form-group">
                            <strong>Card Number:</strong>
                            {{ $paymentMethod->Card_Number }}
                        </div>
                        <div class="form-group">
                            <strong>Card Type:</strong>
                            {{ $paymentMethod->Card_Type }}
                        </div>
                        <div class="form-group">
                            <strong>Due Date:</strong>
                            {{ $paymentMethod->Due_Date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
