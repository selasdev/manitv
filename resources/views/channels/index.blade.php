@extends("layouts.app")

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div>
    <h2 class="text-gray-700 text-5xl mb-4">Plans</h2>
    <a href="{{ route('createChannel') }}">
        <button class="btn btn-primary">
            Create
        </button>
    </a>
    @livewire("channel-list-component")
</div>
@endsection