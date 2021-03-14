@extends("layouts.app")

@section('content')
    <div>
        @if (isset($status))
            <div class="alert alert-success">
                {{ $status }}
            </div>
        @endif
        <h1 class="mb-2">Create plan</h1>
        <form action="{{ route('storePlan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group flex flex-col">
                <label for="service_id">Service *</label>
                @livewire("service-selector-component")
            </div>
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="description">Description *</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="price">Price (USD) *</label>
                <input type='number' step='0.01' placeholder='0.00' name="price" id="price" class="form-control" required>
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
