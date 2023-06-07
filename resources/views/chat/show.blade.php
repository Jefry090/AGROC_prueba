@extends('layouts.app')

@section('template_title')
    {{ $chat->name ?? "{{ __('Show') Chat" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Chat</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chats.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Datetime:</strong>
                            {{ $chat->DateTime }}
                        </div>
                        <div class="form-group">
                            <strong>Text:</strong>
                            {{ $chat->Text }}
                        </div>
                        <div class="form-group">
                            <strong>Images:</strong>
                            {{ $chat->Images }}
                        </div>
                        <div class="form-group">
                            <strong>Videos:</strong>
                            {{ $chat->Videos }}
                        </div>
                        <div class="form-group">
                            <strong>Audios:</strong>
                            {{ $chat->Audios }}
                        </div>
                        <div class="form-group">
                            <strong>Id Profiles:</strong>
                            {{ $chat->id_profiles }}
                        </div>
                        <div class="form-group">
                            <strong>Id Post:</strong>
                            {{ $chat->id_post }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
