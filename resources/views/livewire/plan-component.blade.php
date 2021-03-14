<div class="card mr-4 mb-4 d-flex flex-column justify-content-around" style="width: 18rem;">
    <div class="card-body pb-1">
        <section>
            <h1 class="card-title">{{ $plan->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Service: {{ $plan->service->name }}</h6>
                <p class="card-text">Price: {{ $plan->priceFormatted }} <br> Last update:
                    {{ $plan->updated_at->diffForHumans() }} <br> {{ $plan->description }}
                </p>
        </section>
    </div>
    @if($showActions ?? false)
    <div class="flex-end p-2 ml-2">
        <a href="{{ route('editPlan', $plan) }}" class="btn btn-primary mt-1 card-link">Edit</a>
        @if($plan->getCanHaveChannels())
        <a href="{{ route('editPlanChannels', $plan) }}" class='btn btn-primary mt-1 card-link'>
            Edit plans
        </a>
        @endif
    </div>
    @endif
</div>