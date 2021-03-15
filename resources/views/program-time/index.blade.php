@extends("layouts.app")

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div>
    <h2 class="text-gray-700 text-5xl mb-4">{{ $channel->name }} schedules </h2>
    @if(Auth::user()->role === 'admin')
    <a href="{{ route('addProgramSchedule', $channel) }}">
        <button class="btn btn-primary mb-4">
            Add program
        </button>
    </a>
    @endif
    @foreach($channel->programs as $program)
        @livewire("program-schedule-component", ['program' => $program])
    @endforeach
</div>
@endsection