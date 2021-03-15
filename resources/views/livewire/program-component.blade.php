<div class="card mr-4 mb-4 d-flex flex-column justify-content-around" style="width: 18rem;">
    <div class="card-body pb-1">
        <section>
            <h1 class="card-title">{{ $program->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Last update: {{ $program->updated_at->diffForHumans() }}</h6>
                <p class="card-text">Channel: {{ $program->channel->name }} </p>
        </section>
    </div>
    @if($showActions ?? false)
    <div class="flex-end p-2">
        <a href="{{ route('editProgram', $program) }}" class="btn btn-primary mt-1">Edit</a>
    </div>
    @endif
</div>