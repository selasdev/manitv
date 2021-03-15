@extends("layouts.app")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Edit $plan->name channels") }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('storePlanChannels', $plan) }}">
                        @csrf

                        <div class="form-group">
                            <h3>Channels: </h3>
                            @foreach($channels as $channel)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="channel_{{ $channel->id }}" value="{{ $channel->id }}" id="channel_{{ $channel->id }}" 
                                @if ($isAdded($channel))
                                checked
                                @endif>
                                <label class="form-check-label" for="channel_{{ $channel->id }}">
                                    {{ $channel->name }} #{{ $channel-> number}}
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection