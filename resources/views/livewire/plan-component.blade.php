<div class="card m-4 d-flex flex-column justify-content-between" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{ $plan->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Service: {{ $plan->service->name }}</h6>
            <p class="card-text">Price: {{ $plan->priceFormatted }} <br> Last update:
                {{ $plan->updated_at->diffForHumans() }} <br> {{ $plan->description }} </p>
    </div>
    <div>
        @if ($showActions ?? false)
            <a href="{{ route('editPlan', $plan) }}" class="btn btn-primary mb-3 ml-3">Edit</a>
        @endif
    </div>
</div>
