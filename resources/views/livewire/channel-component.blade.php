<div class="card mr-4" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{ $channel->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Last update: {{ $channel->updated_at->diffForHumans() }}</h6>
            @if($channel->plans != null)
                <p class="card-text">Channel number: {{ $channel->number }} <br> Plans: </p>
                <ul class="list-group list-group-flush">
                @foreach($channel->plans as $channelPlan)
                    <li class="list-group-item">{{ $channelPlan->plan->name }}</li>
                @endforeach
                </ul>
            @endif
            @if($showActions ?? false)
            <a href="{{ route('editChannel', $channel) }}" class="btn btn-primary">Edit</a>
            @endif
    </div>
</div>