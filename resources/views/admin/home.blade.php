@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title text-center mb-5">Welcome to the Admin Dashboard</h5>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">Edit and manage the users registered on ManiTV.</p>
                            <a href="{{ route('admin.user') }}" class="btn btn-primary mb-4">See users</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">Create and edit the services we provide to users.</p>
                            <a href="{{ route('services') }}" class="btn btn-primary mb-4">See services</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">See and manage plans to include on our packages</p>
                            <a href="{{ route('plans') }}" class="btn btn-primary mb-4">See plans</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">Manage the packages we provide to our users.</p>
                            <a href="{{ route('admin.packages') }}" class="btn btn-primary mb-4">See packages</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">List new channels or edit the old ones included on our plans.</p>
                            <a href="{{ route('channels') }}" class="btn btn-primary mb-4">See Channels</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">Manage the requests the users make.</p>
                            <a href="{{ route('admin.packageusers.manage') }}" class="btn btn-primary mb-4">Manage Users Packages</a>
                        </div>

                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p class="card-text">Manage the programs that the users will be able to see on our channels.</p>
                            <a href="{{ route('programs') }}" class="btn btn-primary mb-4">See Programs</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
