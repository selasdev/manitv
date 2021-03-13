@extends("layouts.app")

@section('content')
<div>
    @if(isset($status))
    <div class="alert alert-success">
        {{ $status }}
    </div>
    @endif
    <h2 class="text-gray-700 text-5xl mb-4">Crear plan</h2>
    <form action="{{ route('storePlan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group flex flex-col">
            <label for="service_id">Servicio *</label>
            @livewire("service-selector-component")
        </div>
        <div class="form-group">
            <label for="name">Nombre *</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="name">Precio (USD) *</label>
            <input type='number' step='0.01' placeholder='0.00' name="price" id="price" class="form-control" required>
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <input type="submit" value="Crear" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>
</div>
@endsection