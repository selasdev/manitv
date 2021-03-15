<div class="mt-4 d-flex flex-wrap">
    @foreach($programs as $program)
    @livewire('program-component', ['program' => $program, 'showActions' => true])
    @endforeach
</div>