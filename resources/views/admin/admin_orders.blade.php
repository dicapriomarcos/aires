@extends('layouts.admin')

@section('admin-content')
<main class="p-4">
    <h3 class="text-center">Administrar Orden: {{ $order->id }}</h3>
    <div class="row justify-content-center py-4">
        <div class="col-12">
            <h5>Cliente: {{ $order->user->name }} ({{ $order->user->id }})</h5>
            <h5>Telefono: {{ $order->user->phone }}</h5>
            <h5>Codigo de Pedido: <strong>{{ $order->code }}</strong></h5>
            <h5>Realizado: {{ date("d/m/Y", $order->created_at->getTimestamp()) }} <strong>{{ date("H:i", $order->created_at->getTimestamp())}}</strong></h5>
            
                <form method="post" action="{{ route('order.status') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $order->id }}">
                    <h5>Estado: 
                    <select @change="changeStatus" name="status">
                            <option value="PENDIENTE" {{{ $order->status == 'PENDIENTE' ? 'selected': '' }}}>PENDIENTE</option>
                            <option value="PREPARACION" {{{ $order->status == 'PREPARACION' ? 'selected': '' }}}>PREPARACION</option>
                            <option value="PREPARADO" {{{ $order->status == 'PREPARADO' ? 'selected': '' }}}>PREPARADO</option>
                            <option value="ENVIO" {{{ $order->status == 'ENVIO' ? 'selected': '' }}}>ENVIO</option>
                            <option value="ENTREGADO" {{{ $order->status == 'ENTREGADO' ? 'selected': '' }}}>ENTREGADO</option>
                </select>
                
                </h5>
            <table class=" my-4 table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->pivot->quantity }}</td>
                            <td>{{ $product->pivot->price }}</td>
                            <td>{{ $product->pivot->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-info">Volver a pedidos</button>
        </form>
            
        </div>
    </div>
</main>
@endsection