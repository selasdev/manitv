<div class="card mr-4" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{ $plan->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Service: {{ $plan->service->name }}</h6>
            <p class="card-text">Price: {{ $plan->priceFormatted }} <br> Last update: {{ $plan->updated_at->diffForHumans() }} </p>
            @if($showActions ?? false)
            <a href="{{ route('editPlan', $plan) }}" class="btn btn-primary">Edit</a>
            @endif
    </div>
</div>