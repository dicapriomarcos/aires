@extends('layouts.app')
@include('parts.messages')
@section('content')
    <div class="container">
        
        <div class="row justify-content-center my-5">
            <div class="col-8 col-offset-2">
                <h2 class="text-center">Mis Datos</h2>
                <form method="post" action="{{ route('user.store') }}">
                    @csrf
                <table id="table-user">
                    <tr>
                        <td>
                            Mi Nombre:
                        </td>
                        <td>
                            <input type="text" value="{{ $user->name }}" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mis Apellidos:
                        </td>
                        <td>
                            <input type="text" value="{{ $user->lastname }}" name="lastname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mi Teléfono:
                        </td>
                        <td>
                            <input type="text" value="{{ $user->phone }}" name="phone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mi Correo Electrónico:
                        </td>
                        <td>
                            <input type="text" value="{{ $user->email }}" name="email">
                        </td>
                    </tr>
                </table>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>

    </div>
@endsection