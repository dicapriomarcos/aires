@extends('layouts.app')

@include('parts.messages')
@section('content')
<section id="checkout">
<div class="container my-4">
    <h2 class="text-center">Solo un paso mas</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="text-center my-3">¿Como quieres recibir tu pedido?</h4>
            <div class="row" id="selectpickup">
                <div class="col-6" id="option-1">
                    
                    <input type="radio" name="pickup" value="takeaway" id="takeaway" checked>
                    <label class="card my-3 p-2" for="takeaway">
                        <h5 class="text-center">Recogida en Tienda</h5>
                        <div class="m-auto py-2">
                            <img class="img-radio off" src="{{ asset('images/icons/takeaway-off.png') }}">
                            <img class="img-radio on" src="{{ asset('images/icons/takeaway-on.png') }}">
                        </div>
                        <p class="text-center">Plaza Salvador 2, Elche</p>
                    </label>
                </div>
                <div class="col-6">
                    <input type="radio" name="pickup" value="delivery" id="delivery" disabled>
                    <label class="card my-3 p-2" for="delivery" id="option-delivery">
                        <h5 class="text-center">Envio a Domicilio</h5>
                        <div class="m-auto py-2">
                            <img class="img-radio off" src="{{ asset('images/icons/delivery-off.png') }}">
                            <img class="img-radio on" src="{{ asset('images/icons/delivery-on.png') }}">
                        </div>
                        <p class="text-center">PROXIMAMENTE</p>
                </div>
                </label>
            </div>
        </div>
    </div>
    <di           v class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="text-center ">Tu Pedido</h4>
            <div id="cart" class="card rounded">
                <section class="cart-product" v-for="product in cart['products']">
                    <div class="product-info-top">
                        <span class="quantity">@{{ product.quantity }}</span>
                        <span class="name">@{{ product.name }}</span>
                        <span class="price">@{{ product.subtotal.toFixed(2) }}</span>
                    </div>
                    <div class="product-info-bottom">
                        <span class="description">@{{ product.description }}</span>
                    </div>
                    <div class="product-info-bottom"></div>
                </section>
                <div id="cart" class="py-3">
                    <h4 class="text-right"><strong>Total: <span
                                class="total-order">€@{{ cart.total.toFixed(2) }}</span></strong></h4>
                </div>
                <div class="textarea-section">
                    <label><h5>¿Quieres incluir alguna información sobre Alergenos?</h5></label>
                    <textarea id="allergens" v-model="allergens" rows="4">

                    </textarea>    
                </div>

                <div class="text-center">
                    <a href="{{ route('home') }}" class="my-4">Agregar más productos o modificar pedido</a>
                    <button class="btn btn-primary my-2" data-toggle="modal" data-target="#bizum-pay">Pagar con Bizum</button>
                    <button class="btn btn-info my-2" data-toggle="modal" data-target="#stripe-pay">Pagar con Tarjeta
                        (Stripe)</button>

                </div>
            </div> <!-- END #CART -->
        </div>
    </div>
    @include('modals.bizum-pay')
    @include('modals.stripe-pay')
</div>
</section>
@endsection