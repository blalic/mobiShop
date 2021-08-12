@extends('layout.app')

@section('content')

    <h2>This is the PRODUCTS page!</h2>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h2>CATEGORIES</h2>
                    @foreach ($categories as $cat)
                        <a href="/products/{{ $cat->cat_name }}/{{ $cat->id }}"> <h4>{{ $cat->cat_name }} </h4></a>
                    @endforeach
                    <p>Number of products: <b>{{ $n }}</b></p>
                </div>
                <div class="col-9 product_content">
                    @foreach ($products as $product)
                    <div class="product">
                        <img src="/" alt="product_image"><br>
                        Producer: <h3>{{ $product->category->cat_name }}</h3><br>
                        Model: <a href="/products/{{ $product->id }}"><h4>{{ $product->model_name }}</h4></a><br>
                        Screen size (inch): <h4>{{ $product->screen_size }}</h4><br>
                        Price (eur): <h4>{{ $product->price_in_euro }}</h4>
                    </div>

                    @endforeach

                    <div class="pag">
                        @if ($n>10)
                            {{ $products->links() }}
                        @endif
                    </div>
                </div>



            </div>
        </div>
    </div>


@endsection
