<div class="mt-4 d-flex flex-wrap">
    @foreach($channels as $channel)
    @livewire('channel-component', ['channel' => $channel, 'showActions' => true])
    @endforeach
</div>