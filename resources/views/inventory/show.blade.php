@extends('layouts.app')

@section('template_title')
    {{ $inventory->name ?? "{{ __('Show') Inventory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Total Cost:</strong>
                            {{ $inventory->Total_Cost }}
                        </div>
                        <div class="form-group">
                            <strong>Cost Unit:</strong>
                            {{ $inventory->Cost_unit }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $inventory->Quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Date Input:</strong>
                            {{ $inventory->Date_Input }}
                        </div>
                        <div class="form-group">
                            <strong>Id Warehouses:</strong>
                            {{ $inventory->id_warehouses }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
