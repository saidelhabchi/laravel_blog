@extends('layouts.app')


@section('content')

<!-- Hero -->
<div class="d-flex flex-column align-items-center justify-content-center hero-bg-image">
    <h1 class="text-light mt-5">Hello from Index</h1>
    <a class="text-decoration-none btn btn-light mt-3" href="/">Start Reading</a>
</div>

<!-- 1st blog section -->
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col col-lg-4 d-flex justify-content-lg-end">
            <img src="https://picsum.photos/id/230/300/300" alt="picsum" class="rounded">
        </div>
        <div class="col col-lg-6">
            <h1>How to be an expert in 2023</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, hic. Nemo quos fugiat, ratione, qui odio sint exercitationem laudantium excepturi, vero sunt obcaecati dolorem asperiores nesciunt provident nihil laboriosam quidem?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corporis cumque vero nesciunt non tempora!</p>
            <a href="/" class="btn btn-dark">read more</a>
        </div>
    </div>

</div>

<!-- blog categories -->
<div class="bg-secondary rounded py-4">
    <div class="text-center container">
        <h1 class="fs-1 text-dark fw-bold">Blog Categories</h1>
        <div class="container row row-cols-4 text-white">
            <span class="py-2 fw-bold">Front-end Development</span>
            <span class="py-2 fw-bold">Back-end Development</span>
            <span class="py-2 fw-bold">Mobile Development</span>
            <span class="py-2 fw-bold">Machine Learning</span>
        </div>

    </div>
</div>
<!-- recent blogs -->
<div class="text-center pt-5">
    <div class="container text center mx-auto">
        <h1>Recent Posts</h1>
        <p class="lh-base text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed error harum ab asperiores dicta ex facere ad aliquid. Fugit necessitatibus assumenda laboriosam cumque reiciendis quidem optio temporibus repellat voluptates ea?,Lorem ipsum dolor sit amet consectetur adipisicing elit. Non autem tenetur, provident dolore explicabo sit, nobis impedit minima sint voluptatibus maxime repellat quas animi dignissimos cumque eveniet. Recusandae natus vitae atque libero ratione nobis error nisi facilis facere porro, hic temporibus quasi voluptatum quis ea itaque voluptate quos? Illo, impedit.</p>
    </div>
</div>

<div class="container">
    <div class="row row-cols-2">
        <div class="col d-flex flex-column">
            <div class="card align-self-end" style="width: 18rem;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus magni consectetur facere. Ex dolores cum quasi optio! Expedita quis, cupiditate voluptas reiciendis accusantium exercitationem dignissimos distinctio assumenda, adipisci id praesentium?</p>

                  <a href="/" class="btn btn-dark align-self-end">read more</a>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <img src="https://picsum.photos/id/230/300/300" alt="picsum" class="rounded">
        </div>
    </div>
</div>


<!--
<div class="pic p-5">
<p class="text-wrap">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed error harum ab asperiores dicta ex facere ad aliquid. Fugit necessitatibus assumenda laboriosam cumque reiciendis quidem optio temporibus repellat voluptates ea?,Lorem ipsum dolor sit amet consectetur adipisicing elit. Non autem tenetur, provident dolore explicabo sit, nobis impedit minima sint voluptatibus maxime repellat quas animi dignissimos cumque eveniet. Recusandae natus vitae atque libero ratione nobis error nisi facilis facere porro, hic temporibus quasi voluptatum quis ea itaque voluptate quos? Illo, impedit.</p>
<a href="/" class="btn btn-light">read more</a>
</div>
</div>
-->
<!--
<img src="https://picsum.photos/id/230/300/400" alt="picsum" class="rounded img-fluid">
-->



@endsection
