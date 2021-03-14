<div class="mt-4 d-flex">
    @foreach($services as $service)
    @livewire('service-component', ['service' => $service, 'showActions' => true])
    @endforeach
</div>