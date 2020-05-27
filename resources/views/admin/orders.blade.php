@extends('layouts.admin')

@section('admin-content')
<main id="admin-orders" class="p-4">
    <h3 class="text-center">Administrar Ordenes</h3>
    <div class="row justify-content-center py-4">
        @if( count($orders) > 0)
        <div class="col-md-12">
            <div class="row">
                <table class="table-sm table-striped">
                    <thead class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Pago</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        @php
                            switch($order->status){
                                case 'PENDIENTE':
                                    $badge = 'badge-danger';
                                    break;
                                case 'PREPARACION':
                                    $badge = 'badge-warning';
                                    break;
                                case 'PREPARADO':
                                    $badge = 'badge-info';
                                    break;
                                case 'ENVIO':
                                    $badge = 'badge-secondary';
                                    break;
                                case 'ENTREGADO':
                                    $badge = 'badge-success';
                                    break;
                            }
                                
                        @endphp
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td><span class="price">{{ number_format($order->total, 2) }}</span></td>
                            <td>{{ $order->code }}</td>
                            <td>{{ $order->paid }}</td>
                            <td><span class="badge p-2 {{ $badge ?? '' }} ">{{ $order->status }}</span></td>
                            <td>
                                <a class="ml-auto btn btn-warning btn-sm" href="{{ route('admin.orders', $order->id)  }}">
                                    <i class="fas fa-edit mr-2"></i>Administrar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="col-md-8">
            <h4 class="text-center">Todavía no hay Ordenes</h4>
        </div>
        @endif
    </div>
</main>
@endsection