@extends('layout.app')

@section('content')

<div class="container show">
    <h2>{{ $products->category->cat_name }}</h2>

    <img src="/" alt="product_photo">

    <h2>{{ $products->model_name }}</h2>
    <h4>Screen size: {{ $products->screen_size }} inches</h4>
    <h4>Price: {{ $products->price_in_euro }} euro</h4>
    <a href="/">add to chart&rarr; </a>
</div>

<div class="container comments">
    <h3>User comments</h3>
</div>

@endsection
