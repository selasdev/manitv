<div class="card mr-4" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{ $service->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Creado: {{ $service->created_at->diffForHumans() }}</h6>
        <p class="card-text">Ultima modificación: {{ $service->updated_at->diffForHumans() }} <br> Soporta canales: {{ $service->hasChannelsEmoji }} </p>
    </div>
</div>