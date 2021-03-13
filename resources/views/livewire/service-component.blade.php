<div class="card mr-4" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{ $service->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Created: {{ $service->created_at->diffForHumans() }}</h6>
            <p class="card-text">Last update: {{ $service->updated_at->diffForHumans() }} <br> Support channels: {{ $service->hasChannelsEmoji }} </p>
            @if($showActions ?? false)
            <a href="{{ route('editService', $service) }}" class="btn btn-primary">Edit</a>
            @endif
    </div>
</div>