<select name="service_id" id="service_id" class="form-control custom-select">
    @foreach($services as $service)
        <option value="{{ $service->id }}">{{ $service->name }}</option>
    @endforeach
</select>