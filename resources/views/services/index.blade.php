@extends("layouts.app")

@section('content')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div>
    <a href="{{ route('createService') }}">
        <button class="btn btn-primary">
            Create
        </button>
    </a>
    @livewire("services-list-component")
</div>
@endsection