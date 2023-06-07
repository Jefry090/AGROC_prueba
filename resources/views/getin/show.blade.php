@extends('layouts.app')

@section('template_title')
    {{ $getin->name ?? "{{ __('Show') Getin" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Getin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('getins.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $getin->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $getin->Quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Id Crops:</strong>
                            {{ $getin->id_crops }}
                        </div>
                        <div class="form-group">
                            <strong>Id Product:</strong>
                            {{ $getin->id_product }}
                        </div>
                        <div class="form-group">
                            <strong>Id Supplies:</strong>
                            {{ $getin->id_supplies }}
                        </div>
                        <div class="form-group">
                            <strong>Id Animal:</strong>
                            {{ $getin->id_animal }}
                        </div>
                        <div class="form-group">
                            <strong>Id Machineries:</strong>
                            {{ $getin->id_machineries }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
