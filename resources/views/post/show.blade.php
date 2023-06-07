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
                            <strong>Name:</strong>
                            {{ $post->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Type Product:</strong>
                            {{ $post->Type_Product }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $post->Price }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $post->description }}
                        </div>
                        <div class="form-group">
                            <strong>Archives:</strong>
                            {{ $post->Archives }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $post->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Profiles:</strong>
                            {{ $post->id_profiles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
