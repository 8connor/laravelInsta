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
                    <a href="#" class="btn btn-primary">add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5">
                        <strong>153</strong> posts
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
                    <a href="{{ $user->profile->url }}" target="{{ $user->profile->url ? '_noopener' : $user->profile->url}}" style="color: black; text-decoration: none">
                        {{ $user->profile->url ?? 'N/A'}}
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100"
                    src="https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/e35/c2.0.824.824a/s150x150/164147893_271339697973200_4501097284613692727_n.jpg?tp=1&_nc_ht=scontent-atl3-2.cdninstagram.com&_nc_cat=108&_nc_ohc=9F14wCvA6p0AX9g-IoY&ccb=7-4&oh=f670207297d9650c9802d8092a1c737f&oe=60876E07&_nc_sid=7bff83">
            </div>
            <div class="col-4">
                <img class="w-100"
                    src="https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/e35/c2.0.823.823a/s150x150/161583433_808782516657920_18787023218968172_n.jpg?tp=1&_nc_ht=scontent-atl3-2.cdninstagram.com&_nc_cat=108&_nc_ohc=l2C9Ea-moyAAX8dzUDC&ccb=7-4&oh=c1d2196fda99ad71695783f389cd1f26&oe=6087865C&_nc_sid=7bff83">
            </div>
            <div class="col-4">
                <img class="w-100"
                    src="https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/e35/c0.127.1031.1031a/s240x240/160710587_470824023949841_6981867124535339739_n.jpg?tp=1&_nc_ht=scontent-atl3-2.cdninstagram.com&_nc_cat=105&_nc_ohc=D-Vk-gy5B8MAX_3W3IT&ccb=7-4&oh=ca1e525a3a1e09edc14084865b7adc34&oe=6088F099&_nc_sid=7bff83">
            </div>
        </div>
    </div>
@endsection
