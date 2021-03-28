@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/images/defaultUser.png" alt="default profile pic" class="rounded-circle profilePic"
                     height="100px" width="100px">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>{{ $user->username }}</h2>
                    <a href="/p/create" class="btn btn-primary">Add new post</a>
                </div>
                <a href="/profile/{{ $user->id }}/edit" class="btn btn-secondary">Edit profile</a>
                <div class="d-flex">
                    <div class="pr-5">
                        <strong>{{ $user->posts->count() }}</strong> posts
                    </div>
                    <div class="pr-5">
                        <strong>23k</strong> followers
                    </div>
                    <div>
                        <strong>212</strong> following
                    </div>
                </div>
                <div class="pt-4 font-weight-bold">
                    {{ $user->profile->title }}
                </div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div>
                    <a href="{{ $user->profile->url }}"
                       target="{{ $user->profile->url ? '_noopener' : $user->profile->url }}"
                       style="color: black; text-decoration: none">
                        {{ $user->profile->url ?? 'N/A' }}
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4">
                    <a href="/p/{{ $post->id }}">
                        <img class="w-100 pb-4" src="/storage/{{ $post->image }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
