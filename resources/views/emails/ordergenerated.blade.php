<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
</head>
<body>
    <table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
 
 <tr>
 
<td style="text-align: center; padding: 2rem 1rem">
 
 <img src="{{ asset('images/airesburgerbarmin.png') }}" alt="Aires Burger Bar">
 
</td>
 
 </tr>

 <tr>
 
 <td style="padding: 2rem">
    
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr><td><h2 style="text-align: center;">Nuevo Pedido Online!</h2></td></tr>
        <tr><td>
            <table>
                <tr><td>Pedido: {{ $order->id }} </td></tr>
                <tr><td>Codigo: {{ $order->code }}</td></tr>
                <tr><td>Cliente: {{ $order->user->name }}</td></tr>
                <tr><td>Hora: {{ $order->created_at }}</td></tr>
                <tr><td>Forma de Pago: {{ $order->paid }}</td></tr>
            </table>
            <table>
                <tr>
                    <td>Producto</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Subtotal</td>
                </tr>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            {{ $product->name }}    
                        </td>
                        <td align="center">
                            {{ $product->pivot->quantity }}    
                        </td>
                        <td align="center">
                            {{ $product->pivot->price }}    
                        </td>
                        <td align="center">
                            {{ $product->pivot->total }}    
                        </td>
                    </tr>
                @endforeach
                </table>
                @if( isset($order->allergens) )
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                    <tr>
                        <td>Información de Alergenos: </td>
                    </tr>
                    <tr>
                        <td>{{  $order->allergens }}  </td>
                    </tr>
                </table>
                @endif
                <h4 style="text-align: right;">Total del Pedido: {{ $order->total }}</h4>

        </td></tr>
    </table>
  
   
  
 </td>
  
  </tr>

  <tr>
 
 <td bgcolor="black" style="color: white; text-align: center; padding: 2rem">
  
  Aires Burger Bar - Todos Los Derechos Reservados.
  
 </td>
  
  </tr>
 
</table>
</body>
</html>