@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-4">
                    <div class="card-header">
                        Packages Requests
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Requested Package</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr @if ($package->state === 'approved') class="bg-success"
                                    @elseif ($package->state === 'expired')
                                                                                class="bg-warning"
                                    @elseif ($package->state === 'rejected')
                                                                                class="bg-danger" @endif>
                                        <td>{{ $package->id }}</td>
                                        <td>{{ $package->user->get_fullname }}</td>
                                        <td>{{ $package->package->name }}</td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.packageusers.details', $package) }}">
                                                Manage
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
