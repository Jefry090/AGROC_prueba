@extends('layouts.app')

@section('template_title')
    {{ $supply->name ?? "{{ __('Show') Supply" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Supply</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('supplies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $supply->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $supply->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Priceunit:</strong>
                            {{ $supply->PriceUnit }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
