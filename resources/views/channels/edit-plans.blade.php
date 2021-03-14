@extends("layouts.app")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Edit $channel->name plans") }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('storeChannelPlans', $channel) }}">
                        @csrf

                        <div class="form-group">
                            <h3>Plans: </h3>
                            @foreach($plans as $plan)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="plan_{{ $plan->id }}" value="{{ $plan->id }}" id="plan_{{ $plan->id }}" 
                                @if ($isAdded($plan))
                                checked
                                @endif>
                                <label class="form-check-label" for="plan_{{ $plan->id }}">
                                    {{ $plan->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection