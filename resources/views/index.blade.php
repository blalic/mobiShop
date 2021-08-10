@extends('layout.app')

@section('content')


    <div class="container home">
        <h1>WELCOME TO MOBSHOP!</h1>
        <h2>THE FINEST MOBILE SHOP ON-LINE</h2>
        <p>fine some of the best cell phones offerd on the on-line market</p>
        <h2>Select some of finest <a href="/products">PRODUCTS</a> from our offer!</h2>

        <img src="{{ asset('storage/cell-phone-etiquette-rules.jpg') }}" alt="front-pic">
    </div>

@endsection
