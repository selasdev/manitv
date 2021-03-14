@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5 text-center">Bills</h1>
        @foreach ($packages as $package)
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">

                    <div class="card mb-4">
                        <div class="card-header">
                            {{ $package->package->name }}
                        </div>

                        <h1 class="card-body card-title ml-5">{{ $package->package->name }}</h3>
                        <p class="card-body card-title text-muted ml-5">{{ $package->package->created_at->format('M d Y') }}</p>



                            @foreach ($package->package->plans as $plan)
                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $plan->plan->name }}
                                    </h4>
                                    <p class="card-text">
                                        {{ $plan->plan->description }}
                                    </p>
                                    <p class="text-muted">
                                        {{ $plan->plan->priceFormatted }}
                                    </p>
                                </div>
                            @endforeach

                            <h3 class="card-body card-title ml-5">Total Cost: {{ $package->package->get_price }}</h3>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
