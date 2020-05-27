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
        <tr>
            <td>
                <h2 style="text-align: center;">Gracias {{ $order->user->name }} por tu pedido</h2>
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="text-align: center;">Podes retirar tu pedido en 30 minutos con el codigo</h5>
                <h4 style="text-align: right;">{{ $order->code }}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="text-align: center;">Estamos en Plaza Del Salvador 2</h5>
            </td>
        </tr>
        <tr>
            <td>
                Ver en Google Maps: <a href="https://g.page/airescoffeedrinks?share">Click Aqui</a>
            </td>
        </tr>
        <tr><td>
            <table>
                <tr>
                    <td align="center">Tu Pedido</td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
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
                <h5 style="text-align: right;">Total del pedido: {{  $order->total }}</h5>

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