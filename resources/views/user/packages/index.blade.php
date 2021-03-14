@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-4">
                    <div class="card-header">
                        Packages
                        <a href="{{ route('user.packageuser.creation') }}"
                            class="btn btn-sm btn-primary float-right">Request change</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Requested plan</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr 
                                    @if ($package->state === 'approved')
                                    class="bg-success"
                                    @elseif ($package->state === 'expired')
                                    class="bg-warning"
                                    @elseif ($package->state === 'rejected')
                                    class="bg-danger"
                                    @endif
                                    >
                                        <td>{{ $package->id }}</td>
                                        <td>{{ $package->package->name }}</td>
                                        <td>{{ $package->package->get_price }}</td>
                                        <td>{{ $package->get_state }}</td>
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
