<div class="modal fade" id="bizum-pay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Pagar con Bizum</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('stripe.bizum') }}">
                            @csrf
                            <input type="hidden" name="amount" v-model="cart.total.toFixed(2)">
                            <textarea name="allergens" class="allergens-target" style="display: none">@{{ allergens }}</textarea>

                            <div>
                                <p>Envia €@{{ cart.total.toFixed(2) }} útilizando el Servicio de BIZUM de tu cuenta bancaria a nuestro whatsapp y luego haz click en el botón para completar tu pedido</p>

                                <h3 class="text-center">+34 622 92 42 03</h3>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn btn-block my-4" type="submit">Ya Pagué <span
                                            class="price">€ @{{ cart.total.toFixed(2) }}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>