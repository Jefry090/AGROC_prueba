@extends('layouts.app')

@section('template_title')
    {{ $bill->name ?? "{{ __('Show') Bill" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bill</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bills.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $bill->Time }}
                        </div>
                        <div class="form-group">
                            <strong>Type Bagde:</strong>
                            {{ $bill->Type_Bagde }}
                        </div>
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $bill->cost }}
                        </div>
                        <div class="form-group">
                            <strong>Id Transaction:</strong>
                            {{ $bill->id_transaction }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
