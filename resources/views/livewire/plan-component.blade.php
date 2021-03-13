<div class="card mr-4" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{ $plan->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Servicio: {{ $plan->service->name }}</h6>
        <p class="card-text">Precio: {{ $plan->priceFormatted }} <br> Ultima modificación: {{ $plan->updated_at->diffForHumans() }} </p>
    </div>
</div>