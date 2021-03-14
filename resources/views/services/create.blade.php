@extends("layouts.app")

@section('content')
<div>
    @if(isset($status))
    <div class="alert alert-success">
        {{ $status }}
    </div>
    @endif
    <h1 class="mb-2">Create service</h1>
    <form action="{{ route('storeService') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" name="canAddChannels" id="canAddChannels">
            <label for="canAddChannels" class="form-check-label">This service supports channels</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection