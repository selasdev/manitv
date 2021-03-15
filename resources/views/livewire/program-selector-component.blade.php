<select name="program_id" id="program_id" class="form-control custom-select">
    @foreach($programs as $program)
        @if(isset($program_id) && $program->id == $program_id)
        <option value="{{ $program->id }}" selected>{{ $program->name }}</option>
        @else
        <option value="{{ $program->id }}">{{ $program->name }}</option>
        @endif
    @endforeach
</select>