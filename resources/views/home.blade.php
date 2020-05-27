@extends('layouts.app')

@section('content')
<section id="home">
<div class="container-fluid hero">
    <div class="text-hero">
        <img src="{{ asset('images/airesburgerbar-square.png')  }}" alt="">
    </div>
</div>
@if($site->open == 'open')
<div class="container py-4">
    <div id="app" class="row justify-content-center">
        <div class="col-md-8">
            @if(isset($categories))
                @foreach($categories as $category)
            <div class="py-3"><h3>{{ $category->name }}</h3></div>
            <div class="row">
                @foreach($category->products as $product)
                <div class="col-md-6 product-box">
                    <div class="card card-product rounded p-3 shadow">
                        <div class="card-product-description">
                            <h4>{{$product->name}}</h4>
                            <p>{!! nl2br(e($product->description)) !!}</p>
                        </div>

                        <div class="card-product-action mt-auto"><span class="price">{{number_format($product->price, 2)}}</span><button
                                class="btn-secondary" @click.prevent="addCart({{ $product }})"><i class="fas fa-plus"></i></button></div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            @else
            <div class="row">
                <h3>No hay productos</h3>
            </div>
            @endif
        </div>
        <div class="col-md-4">
            @include('cart.cart')
        </div>
    </div>
</div>
@else
<div class="container py-4">
    <h2>La tienda se encuentra cerrada en este momento</h2>
    <h3>Puedes enviarnos un whatsapp al </h3>
</div>
@endif
</section>
@endsection
