@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-4">
                    <div class="card-header">
                        User Package Request
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Package Request</h5>
                        <p class="card-text">{{ $package->package->name }}</p>
                        <h5 class="card-title">User Requesting</h5>
                        <p class="card-text">{{ $package->user->get_fullname }}</p>
                        <h5 class="card-title">Status</h5>
                        <p class="card-text">{{ $package->package->get_state }}</p>

                        <h5 class="card-title">Actions</h5>
                        <form method="POST" action="{{ route('admin.packageusers.update', $package) }}">
                            @csrf
                            @method('PUT')

                            <input type="submit" class="btn btn-sm btn-danger" name="status" value="Reject">
                            <input type="submit" class="btn btn-sm btn-success mr-2" name="status" value="Approve">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
