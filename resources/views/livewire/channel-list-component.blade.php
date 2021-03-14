<div class="mt-4 d-flex">
    @foreach($channels as $channel)
    @livewire('channel-component', ['channel' => $channel, 'showActions' => true])
    @endforeach
</div>