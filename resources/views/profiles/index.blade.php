@extends('layouts.app')

@section('content')
<div class="container" style="margin: auto;">
    <div style="width: 80%; margin-left: 10%; margin-right:10%; background: #DCDCDC; border-radius: 50px;">
        <div class="row">
            <div class="col-3 p-5" >
                <img src="https://www.kindpng.com/picc/m/22-223965_no-profile-picture-icon-circle-member-icon-png.png" alt="" class="rounded-circle" style="width: 200px; height: 200px;">
            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <button class="btn btn-primary">Follow</button>
                </div>
                <div class="d-flex ">
                    <div style="padding-right: 50px;"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div style="padding-right: 50px;"><strong>23k</strong> followers</div>
                    <div style="padding-right: 50px;"><strong>369</strong> following</div>
                </div>
                <div style="padding-top: 30px; font-weight: bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
                <div class="d-flex" style="margin-top: 30px;">
                    @can('update', $user->profile)
                        <a href="/post/create" class="btn btn-primary">Add Post</a>
                    @endcan
                    @can('update', $user->profile)
                        <div><a href="/profile/{{ $user->id }}/edit" class="btn btn-primary" style="margin-left: 50px;">Edit profile</a></div>
                    @endcan
                </div>
            </div>
        </div>

        <div class="row d-flex">
            @foreach($user->posts as $post)
                <div class="col-4 pb-5">
                    <a href="/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" alt="" class="w-100 h-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
