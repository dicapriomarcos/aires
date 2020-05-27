@extends('layouts.admin')
@section('admin-content')
<main class="p-4 text-center">
    <div class="container">
        <h2 class="py-4">Hola {{ Auth::user()->name }}<h2>

        <h4>Bienvenido al panel de Administración</h4>
    </div>
    <div class="container">
    <div class="row py-5">
        <h5>Estado de la Tienda: @if($site->open == 'open')<span class="badge badge-success">Abierta</span>
        @else <span class="badge badge-danger">Cerrada</span> @endif</h5>
    </div>
    <form method="post" action="{{ route('site.status') }}">
        @csrf
        <input type="hidden" name="status" value="{{{ $site->open == 'open' ? 'close' : 'open' }}}">
        <button type="submit" class="btn btn-info">{{{ $site->open == 'open' ? 'CERRAR TIENDA' : 'ABRIR TIENDA' }}}</button>
    </form>
    
    </div>
    

</main>
@endsection