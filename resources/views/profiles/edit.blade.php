@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1 class="pb-4">Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label">{{ __('Choose new username') }}</label>

                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                               name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">{{ __('New name') }}</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row pt-5 justify-content-center">
                        <button class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
