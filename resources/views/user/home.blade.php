@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title text-center mb-5">Welcome to the User Dashboard</h5>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">Edit and manage the packages you acquired</p>
                            <a href="{{ route('user.packageuser') }}" class="btn btn-primary mb-4">See Packages</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">See your bills on ManiTV</p>
                            <a href="{{ route('user.packageuser.bills') }}" class="btn btn-primary mb-4">See Bills</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">See channels and their schedules </p>
                            <a href="{{ route('channels') }}" class="btn btn-primary mb-4">See Channels</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
