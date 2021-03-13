<span>{{ $service->name }}</span>
<span>{{ $service->created_at->diffForHumans() }}</span>
<span>{{ $service->updated_at->diffForHumans() }}</span>
<span>{{ $service->hasChannelsEmoji }}</span>