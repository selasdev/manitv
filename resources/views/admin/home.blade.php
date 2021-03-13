@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title">Welcome to the Admin Dashboard</h5>

                        <p class="card-text">Edit and manage the users registered on ManiTV.</p>
                        <a href="{{ route('admin.user') }}" class="btn btn-primary">See users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
