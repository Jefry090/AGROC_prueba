@extends('layouts.app')

@section('template_title')
    {{ $animal->name ?? "{{ __('Show') Animal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Animal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('animals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $animal->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Breed:</strong>
                            {{ $animal->Breed }}
                        </div>
                        <div class="form-group">
                            <strong>Dateborn:</strong>
                            {{ $animal->DateBorn }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
