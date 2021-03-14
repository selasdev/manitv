<div class="mt-4 d-flex">
    @foreach($plans as $plan)
    @livewire('plan-component', ['plan' => $plan, 'showActions' => true])
    @endforeach
</div>