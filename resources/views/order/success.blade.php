@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2 class="text-center">Gracias {{ Session::get('order')->user->name }} por completar tu Pedido</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h5 class="text-center mt-4">Retira tu pedido en 30 minutos con el codigo</h5>
            <h3 class="text-center"><strong>{{ Session::get('order')->code }} </strong></h3>
            <h5 class="text-center mt-4 mb-3">Estamos en Plaza del Salvador 2, Elche</h5>
            <div class="text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d195.7913032705144!2d-0.6973015595890825!3d38.26417112619745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6659e638246d4cfb!2sAIRES%20coffee%20%26%20drinks!5e0!3m2!1ses!2ses!4v1589321429969!5m2!1ses!2ses"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

        </div>
    </div>
</div>
@endsection