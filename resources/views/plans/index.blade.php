@extends("layouts.app")

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div>
    <h2 class="text-gray-700 text-5xl mb-4">Planes</h2>
    <a href="{{ route('createPlan') }}">
        <button class="btn btn-primary">
            Crear
        </button>
    </a>
    @livewire("plans-list-component")
</div>
@endsection