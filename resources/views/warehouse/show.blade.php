@extends('layouts.app')

@section('template_title')
    {{ $warehouse->name ?? "{{ __('Show') Warehouse" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Warehouse</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('warehouses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $warehouse->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $warehouse->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            {{ $warehouse->Capacity }}
                        </div>
                        <div class="form-group">
                            <strong>Id Getins:</strong>
                            {{ $warehouse->id_getins }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
