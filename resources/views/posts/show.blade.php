@extends('layouts.app')

@section('content')
<div class="container" style="margin: auto">
    <div class="wrapper">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100 h-100" style="border-radius: 20px">
            </div>
            <div class="col-4">
                <h3 class="pt-5"><a href="/profile/{{$post->user->id}}" class="text-dark" style="text-decoration: none">{{ $post->user->username }}</a></h3>
                <hr>
                <span style="font-weight: bold;"><a href="/profile/{{$post->user->id}}" class="text-dark" style="text-decoration: none">{{ $post->user->username }}</a> </span>
                <span>{{$post->caption}}</span>
            </div>
        </div>

    </div>
</div>
@endsection
