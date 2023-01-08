@extends('layouts.app')

@section('content')



<div class="container text-center py-4">
    <h1 class="fw-bold">
        All Posts
    </h1>
</div>

@if (Auth::check())

<div class="container py-3 border-bottom">
    <a href="/blog/create" class="btn btn-success">Create Post</a>
</div>

@endif

@foreach ($posts as $post)

<div class="container py-3 border-bottom">
    <div class="row justify-content-center">
        <div class="col col-lg-4 d-flex justify-content-lg-end">
            <img src="{{ $post->image_path }}" alt="picsum" class="rounded">
        </div>
        <div class="col col-lg-6">
            <h1>{{ $post->title }}</h1>
            <span class="my-4">
                By : <span class="fst-italic">{{ $post->user->name }}</span>
                , On : <span class="fst-italic">{{ date('d-m-Y', $post->updated_at) }}</span>
            </span>
            <p>{{ $post->description }}</p>
            <a href="/blog/{{$post->slug}}" class="btn btn-dark">read more</a>
        </div>
    </div>

</div>


@endforeach



@endsection
