<div class="container">
    @foreach($program->times as $time)
    <div class="row">
        <p>{{ $program->name }} - Day: {{$time->day }} - {{ $time->startHuman }} - {{ $time->endHuman}}</p>
    </div>
    @endforeach
</div>