@extends("layouts.app")

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div>
    <h2 class="text-gray-700 text-5xl mb-4">Channels</h2>
    <div class="d-flex flex-row">
        <a href="{{ route('createChannel') }}">
            <button class="btn btn-primary">
                Create
            </button>
        </a>
    </div>
    @livewire("channel-list-component")
</div>
@endsection