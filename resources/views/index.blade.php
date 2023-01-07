@extends('layouts.app')


@section('content')


<div class="d-flex flex-column align-items-center justify-content-center hero-bg-image">
    <h1 class="text-light mt-5">Hello from Index</h1>
    <a class="text-decoration-none btn btn-light mt-3" href="/">Start Reading</a>
</div>

<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col">
            <img src="https://picsum.photos/id/230/300/300" alt="picsum">
        </div>
        <div class="col">
            <h1>How to be an expert in 2023</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, hic. Nemo quos fugiat, ratione, qui odio sint exercitationem laudantium excepturi, vero sunt obcaecati dolorem asperiores nesciunt provident nihil laboriosam quidem?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corporis cumque vero nesciunt non tempora!</p>
            <a href="/">read more</a>
        </div>
    </div>

</div>

@endsection
