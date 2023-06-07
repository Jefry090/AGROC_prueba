@extends('layouts.app')

@section('template_title')
    {{ $suscription->name ?? "{{ __('Show') Suscription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Suscription</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscriptions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Suscription:</strong>
                            {{ $suscription->Type_Suscription }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $suscription->Time }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $suscription->price }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $suscription->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Id Profiles:</strong>
                            {{ $suscription->id_profiles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
