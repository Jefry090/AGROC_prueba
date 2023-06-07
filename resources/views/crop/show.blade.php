@extends('layouts.app')

@section('template_title')
    {{ $crop->name ?? "{{ __('Show') Crop" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Crop</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('crops.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $crop->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $crop->Type }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $crop->Quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Datesowing:</strong>
                            {{ $crop->Datesowing }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
