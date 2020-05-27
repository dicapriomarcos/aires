<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect,Response;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Session;

use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Exception\MissingParameterException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderGenerated;

use App\Order;
use App\Order_product;
use App\User;


class StripeController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $cart = Session::get('cart');

        if( !isset($cart) || count( $cart) == 0 ){
            return redirect('/');
        }

        return view('cart.checkout')->with('cart' , $cart);
    }
      
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        if( url()->previous() == url('checkout') ){
            $order = new Order;
            $order->total = $request->input('amount');
            $order->user_id = Auth::id();
            $order->allergens = $request->input('allergens');
            $order->save();
        } else {
            return redirect()->route('home');
        }

        
        
        $stripe = Stripe::make(env('STRIPE_SECRET'));
        //var_dump($stripe); die();
        try {
            $token = $stripe->tokens()->create([
                'card' => [
                    'number'    => $request->get('card_no'),
                    'exp_month' => $request->get('exp_month'),
                    'exp_year'  => $request->get('exp_year'),
                    'cvc'       => $request->get('cvv'),
                ],
            ]);
            //var_dump($token); die();
            if (!isset($token['id'])) {
                
                return redirect()->route('payform')->with('error' , 'The Stripe Token was not generated correctly');
            }

            $random = strtoupper(Str::random(5));

            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'EUR',
                'amount'   => $request->input('amount'),
                'description' => 'Add in wallet',
                'metadata' => [
                    'pedido_id' => $order->id,
                    'pedido_code' => $random,
                    'cliente_id' => Auth::id(),
                    'cliente_name' => Auth::user()->name
                ]
            ]);
            if($charge['status'] == 'succeeded') {

                $order->code = $random;
                $order->paid = 'Pagado';
                $order->status = 'pendiente';
                $save = $order->save();

                $cart = Session::get('cart');

                foreach($cart['products'] as $product){
                    $order_product = new Order_product; 
                    $order_product->order_id = $order->id;
                    $order_product->product_id = $product->id;
                    $order_product->quantity = $product->quantity;
                    $order_product->price = $product->price;
                    $order_product->total = $product->subtotal;
                    $order_product->save();            
                }

                Session()->forget('cart');
                Session::flash('success','El Pago se ha realizado con exito');
                Session::flash('order' , $order);
                return redirect()->route('order.success');
            } else {

                $order->paid = 'fallo';
                $order->save();

                Session::flash('error','No ha sido posible completar el pago');
                return redirect()->route('payform');
            }
        } catch (Exception $e) {
            Session::flash('error',$e->getMessage());
            return redirect()->route('payform');
        } catch(CardErrorException $e) {
            Session::flash('error',$e->getMessage());
            return redirect()->route('payform');
        } catch(MissingParameterException $e) {
            Session::flash('error',$e->getMessage());
            return redirect()->route('payform');
        }

        return $stripe;
    }

    public function bizum(Request $request){

                $order = new Order;
                $order->total = $request->input('amount');
                $order->user_id = Auth::id();
                $random = strtoupper(Str::random(5));
                $order->code = $random;
                $order->paid = 'BIZUM';
                $order->status = 'pendiente';
                $order->allergens = $request->input('allergens');
                $order->save();

                $cart = Session::get('cart');

                foreach($cart['products'] as $product){
                    $order_product = new Order_product; 
                    $order_product->order_id = $order->id;
                    $order_product->product_id = $product->id;
                    $order_product->quantity = $product->quantity;
                    $order_product->price = $product->price;
                    $order_product->total = $product->subtotal;
                    $order_product->save();            
                }

                Session()->forget('cart');
                return redirect()->route('order.success')->with('order' , $order);
    }
}