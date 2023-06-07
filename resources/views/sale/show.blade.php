@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $sale->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Amount Total:</strong>
                            {{ $sale->Amount_Total }}
                        </div>
                        <div class="form-group">
                            <strong>Id Warehouses:</strong>
                            {{ $sale->id_warehouses }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
