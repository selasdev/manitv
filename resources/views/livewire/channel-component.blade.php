<div class="card mr-4 mb-4 d-flex flex-column justify-content-around" style="width: 18rem;">
    <div class="card-body pb-1">
        <section>
            <h1 class="card-title">{{ $channel->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Last update: {{ $channel->updated_at->diffForHumans() }}</h6>
                <p class="card-text">Channel number: {{ $channel->number }} </p>
        </section>
    </div>
    @if(count($channel->plans) != 0)
    <ul class="list-group list-group-flush">
        @foreach($channel->plans as $plan)
        <li class="list-group-item">{{ $plan->name }}</li>
        @endforeach
    </ul>
    @endif
    @if($showActions ?? false)
    <div class="flex-end p-2">
        <a href="{{ route('editChannel', $channel) }}" class="btn btn-primary mt-1">Edit</a>
        <a href="{{ route('editChannelPlans', $channel) }}" class='btn btn-primary mt-1'>
            Edit plans
        </a>
        <a href="{{ route('channelSchedule', $channel) }}" class='btn btn-primary mt-1'>
            See schedule
        </a>
    </div>
    @endif
</div>