@extends('layouts.app')

@section('template_title')
    {{ $record->name ?? "{{ __('Show') Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Record</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $record->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $record->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Id Getins:</strong>
                            {{ $record->id_getins }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sales:</strong>
                            {{ $record->id_sales }}
                        </div>
                        <div class="form-group">
                            <strong>Id Outputs:</strong>
                            {{ $record->id_outputs }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
