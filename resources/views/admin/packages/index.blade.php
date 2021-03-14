@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-4">
                    <div class="card-header">
                        Packages
                        <a href="{{ route('admin.packages.creation') }}"
                            class="btn btn-sm btn-primary float-right">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th colspan="4">Plans</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                        <td>{{ $package->id }}</td>
                                        <td>{{ $package->name }}</td>
                                        <td>{{ $package->get_price }}</td>
                                        <td>
                                            @foreach ($package->plans as $plan)
                                                {{ $plan->plan->name }},&nbsp;
                                            @endforeach
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.packages.edit', $package) }}"
                                                class="btn btn-primary btn-sm mr-3">
                                                Update
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
