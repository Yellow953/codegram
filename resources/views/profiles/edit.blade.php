@extends('layouts.app')

@section('content')
<div class="container" style="margin: auto">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile : </h1>
                </div>

                <div class="form-group row mt-5">
                    <label for="title" class="col-md-4 col-form-label text-md-end">Title : </label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                        @error('title')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <label for="description" class="col-md-4 col-form-label text-md-end">Description : </label>
                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                        @error('description')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <label for="url" class="col-md-4 col-form-label text-md-end">Url : </label>
                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                        @error('url')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="row mt-5">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Profile Image : </label>
                    <input type="file" class="form-control-file col-md-6" id="image" name="image">

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
