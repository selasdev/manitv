@extends("layouts.base_admin")

@section('content')
<div>
    @if(isset($status))
    <div class="alert alert-success">
        {{ $status }}
    </div>
    @endif
    <h2 class="text-4xl mb-5">Crear servicio</h2>
    <form action="{{ route('storeService') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre *</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="flex mb-4">
            <label for="canAddChannels">Este servicio utiliza canales: </label>
            <input type="checkbox" class="form-checkbox h-5 w-5 text-teal-600 ml-1" name="canAddChannels" id="canAddChannels">
        </div>
        <div class="form-group">
            <input type="submit" value="Crear" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>
</div>
@endsection