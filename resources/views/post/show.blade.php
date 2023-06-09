@extends('layouts.app')

@section('template_title')
    {{ $post->name ?? "{{ __('Show') Post" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $post->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de producto:</strong>
                            {{ $post->Type_Product }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $post->Price }}
                        </div>
                        <div class="form-group">
                            <strong>descripcion:</strong>
                            {{ $post->description }}
                        </div>
                        <div class="form-group">
                            <strong>Archivos:</strong>
                            {{ $post->Archives }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $post->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Perfil:</strong>
                            {{ $post->id_profiles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
