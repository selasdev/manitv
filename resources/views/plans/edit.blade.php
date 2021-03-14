@extends("layouts.app")

@section('content')
<div>
    @if(isset($status))
    <div class="alert alert-success">
        {{ $status }}
    </div>
    @endif
    <h1 class="mb-2">Edit plan</h1>
    <form action="{{ route('putPlan', $plan) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group flex flex-col">
            <label for="service_id">Service *</label>
            @livewire("service-selector-component", ['service_id' => $plan->service_id])
        </div>
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $plan->name }}"required>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="name">Price (USD) *</label>
            <input type='number' step='0.01' placeholder='0.00' name="price" id="price" class="form-control" value="{{ $plan->price }}" required>
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection