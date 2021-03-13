<div class="grid grid-cols-4 gap-2 mt-4">
    <span>Nombre</span>
    <span>Creación</span>
    <span>Ultima actualización</span>
    <span>Puede agregar canales</span>
    @foreach($services as $service)
    @livewire('service-component', ['service' => $service])
    @endforeach
</div>