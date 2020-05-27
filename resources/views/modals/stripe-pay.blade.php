<div class="modal fade" id="stripe-pay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pagar con Stripe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="post" action="{{ route('stripe.store') }}">
                            @csrf
                            <input type="hidden" name="amount" v-model="cart.total.toFixed(2)">
                            <textarea name="allergens" class="allergens-target" style="display: none">@{{ allergens  }}</textarea>
                            <div class='form-row row'>
                                <div class='form-group col-12'>
                                    <label class='control-label'>Nombre y Apellidos del titular de la tarjeta</label>
                                    <input class='form-control' type='text' name="card_name" required>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-12 form-group'>
                                    <label class='control-label'>Número de Tarjeta</label>
                                    <input autocomplete='off' class='form-control card-number'                     name="card_no" required>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ej. 311'
                                        size='4' type='text' name="cvv" required>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Mes Vencimiento</label>
                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'
                                        name="exp_month" required>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Año Vencimiento</label>
                                    <input class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text'
                                        name="exp_year" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn btn-block my-4" type="submit">Pagar ahora <span
                                            class="price">€ @{{ cart.total.toFixed(2) }}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>