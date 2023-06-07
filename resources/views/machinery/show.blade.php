@extends('layouts.app')

@section('template_title')
    {{ $machinery->name ?? "{{ __('Show') Machinery" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Machinery</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('machineries.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $machinery->Type }}
                        </div>
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $machinery->Model }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $machinery->Brand }}
                        </div>
                        <div class="form-group">
                            <strong>Yearmanufactured:</strong>
                            {{ $machinery->YearManuFactured }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $machinery->Status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
