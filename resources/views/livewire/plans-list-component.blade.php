<div class="mt-4 d-flex flex-wrap">
    @foreach($plans as $plan)
    @livewire('plan-component', ['plan' => $plan, 'showActions' => true])
    @endforeach
</div>