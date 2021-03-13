@extends("layouts.app")

@section('content')
<div>
    @if(isset($status))
    <div class="alert alert-success">
        {{ $status }}
    </div>
    @endif
    <h1 class="mb-2">Edit service</h1>
    <form action="{{ route('putService', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}" required>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" name="canAddChannels" id="canAddChannels" {{ $checkedStr }}>
            <label for="canAddChannels" class="form-check-label">This service support channels</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection