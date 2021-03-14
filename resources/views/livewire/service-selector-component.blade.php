<select name="service_id" id="service_id" class="form-control custom-select">
    @foreach($services as $service)
        @if(isset($service_id) && $service->id == $service_id)
        <option value="{{ $service->id }}" selected>{{ $service->name }}</option>
        @else
        <option value="{{ $service->id }}">{{ $service->name }}</option>
        @endif
    @endforeach
</select>