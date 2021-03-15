<select name="channel_id" id="channel_id" class="form-control custom-select">
    @foreach($channels as $channel)
        @if(isset($channel_id) && $channel->id == $channel_id)
        <option value="{{ $channel->id }}" selected>{{ $channel->name }}</option>
        @else
        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
        @endif
    @endforeach
</select>