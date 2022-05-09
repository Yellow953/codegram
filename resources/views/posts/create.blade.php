@extends('layouts.app')

@section('content')
<div class="container" style="margin: auto">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Create New Post : </h1>
                </div>

                <div class="form-group row mt-5">
                    <label for="caption" class="col-md-4 col-form-label text-md-end">Post Caption : </label>
                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="row mt-5">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Post Image : </label>
                    <input type="file" class="form-control-file col-md-6" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary">Add new Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
