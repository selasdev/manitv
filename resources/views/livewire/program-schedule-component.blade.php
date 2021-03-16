<div class="container">
    @foreach($program->timesByDay as $day => $times)
        @if(count($times) >= 1)
            <h3 class="row">{{ $day }}</h3>
            @foreach($times as $time)
            <div class="row">
                <p><b>{{ $program->name }}</b> - from {{ $time->startHuman }} to {{ $time->endHuman}}</p>
            </div>
            @endforeach
        @endif
    @endforeach
</div>