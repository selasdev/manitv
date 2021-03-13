<div class="mt-4 d-flex">
    @foreach($services as $service)
    @livewire('service-component', ['service' => $service])
    @endforeach
</div>