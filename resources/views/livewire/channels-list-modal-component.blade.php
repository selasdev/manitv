<div>
    @if($plan->getCanHaveChannels())
    <a href="#" class="ml-1" data-toggle="modal" data-target="#channels_modal_{{ $plan->id }}">
        See channels
    </a>
    <div class="modal fade" id="channels_modal_{{ $plan->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Channels from {{ $plan->name }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-wrap">
                    @foreach($plan->channels as $channel)
                    @livewire('channel-component', ['channel' => $channel])
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('editPlanChannels', $plan) }}" class="btn btn-primary">Edit plan's channels</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>