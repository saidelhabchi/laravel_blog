@extends('layouts.app')

@section('content')

<div class="container text-center py-4">
    <h1 class="fw-bold">
        New Post
    </h1>
</div>

<div class="container text-center py-4">
    <form action="/blog" method="post" enctype="multipart/form-data">
        @csrf
        <div class="m-5">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="m-5">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="10"></textarea>
        </div>
        <div class="m-5">
            <label for="image" class="form-label">Image</label>
            <input class="form-control form-control-lg" id="image" name="image" type="file">
        </div>
        <div class="m-5">
            <button class="btn btn-success btn-lg" type="submit">
                submit
            </button>
            <button class="btn btn-danger btn-lg" type="reset">
                reset
            </button>
        </div>
    </form>

</div>

@endsection
