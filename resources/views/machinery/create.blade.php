@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Machinery
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Machinery</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('machineries.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('machinery.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
