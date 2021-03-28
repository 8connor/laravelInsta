@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <img class="w-100" src="/storage/{{ $post->image }}">
            </div>
            <div class="col-6 text-left">
                <h3>{{ $post->user->username }}</h3>
                <p>{{ $post->caption }}</p>
            </div>
        </div>
    </div>
@endsection
