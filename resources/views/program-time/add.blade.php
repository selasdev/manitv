@extends("layouts.app")

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create program') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('storeProgramTime', $channel) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="program_id" class="col-md-4 col-form-label text-md-right">{{ __('Program: ') }}</label>

                                <div class="col-md-6">
                                    @livewire('program-selector-component', ['channel_id' => $channel->id])

                                    @error('program')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="day" class="col-md-4 col-form-label text-md-right">{{ __('Day') }}</label>

                                <div class="col-md-6">
                                    <input id="day" type="text" class="form-control @error('day') is-invalid @enderror"
                                        name="day" value="{{ old('day') }}" required autocomplete="day" autofocus>

                                    @error('day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time_start" class="col-md-4 col-form-label text-md-right">{{ __('Start') }}</label>

                                <div class="col-md-6">
                                    <input id="time_start" type="time" class="form-control @error('time_start') is-invalid @enderror"
                                        name="time_start" value="{{ old('time_start') }}" required autocomplete="time_start" autofocus>

                                    @error('time_start')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time_end" class="col-md-4 col-form-label text-md-right">{{ __('End') }}</label>

                                <div class="col-md-6">
                                    <input id="time_end" type="time" class="form-control @error('time_end') is-invalid @enderror"
                                        name="time_end" value="{{ old('time_end') }}" required autocomplete="time_end" autofocus>

                                    @error('time_end')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
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