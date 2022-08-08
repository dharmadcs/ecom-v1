@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div> --}}
            <div class="jumbotron">
                <h2 class="display-4">Welcome to DCS_Store</h2>
                <h3>This is one of my portfolio websites for e-commerce type.</h3>
                <hr class="my-4">
                <h5>If you want to know me, please contact me at the contact listed.</h5>
                <a class="btn btn-primary btn-lg" href="/contact" role="button">Contact Me</a>
              </div>
        </div>
    </div>
</div>
@endsection
