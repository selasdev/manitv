@extends("layouts.base_admin")

@section('content')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div>
    <a href="/crear-servicios">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear
        </button>
    </a>
    @livewire("services-list-component")
</div>
@endsection