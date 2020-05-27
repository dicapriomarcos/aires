<div id="cart" class="card rounded shadow" v-bind:class="{ showcart: showCart}">
    <h3 class="text-center">Mi Pedido</h3>
    <div v-if=" cart != false && cart.products != false">

            <section class="cart-product" v-for="product in cart['products']">
                <div class="product-info-top">
                    
                    <span class="quantity">@{{ product.quantity }}</span>
                    <span class="name">@{{ product.name }}</span>
                    <span class="price">@{{ product.subtotal.toFixed(2) }}</span>
                </div>
                <div class="product-info-bottom">
                    <span class="minus" @click.prevent="removeCart(product)"><i class="fas fa-minus"></i></span>
                    <span class="description">@{{ product.description }}</span>
                    <span class="plus" @click.prevent="addCart(product)"><i class="fas fa-plus"></i></span>
                </div>
                <div class="product-info-bottom"></div>
            </section>
            <div class="p-3"><h5>Total del pedido: <span class="total-order">@{{ cart.total ?cart.total.toFixed(2) : '' }}</span></h5></div>
            <div class="my-3"><a class="btn btn-primary d-block" href="{{ route('payform') }}">Pasar por caja</a></div>
    </div>
    <div v-else>
        <p>No hay productos</p>
    </div>
    <div id="modify-cart" class="text-center">
                <a class="" v-on:click="showCart = !showCart">Modificar Pedido</a>
            </div>
</div>


<div v-if="cart.count > 0" id="mobile-cart-count" class="" v-on:click="showCart = !showCart">
    <p>@{{ cart.count }}x @{{ cart.count > 1 ? 'Productos' : 'Producto' }} (€@{{ cart.total }})</p>
</div>