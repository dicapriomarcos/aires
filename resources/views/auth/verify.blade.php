@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo correo de verificación a tu correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Para continuar, debes verificar tu correo electrónico.') }}
                    {{ __('Si no has recibido tu correo.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary my-2 align-baseline">{{ __('Haz Click Aquí para obtener un nuevo link de verificación') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
