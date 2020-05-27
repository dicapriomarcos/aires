<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getCart(){

        //$cart = array();
        $cart = Session::get('cart');
        $cart['total'] = 0;
        $cart['count'] = 0;
        //settype($cart['total'], "double");      

        foreach($cart['products'] as $product){
            $cart['products'][$product['id']]->subtotal = $product->price * $product->quantity;
            $cart['total'] += $product->subtotal;
            $cart['count'] += $product->quantity;
        }

        Session::put('cart', $cart);
        $cart = Session::get('cart');
        
        return $cart;
    }

    public function addCart($id)
    {
        $product = Product::find($id);

        $cart = Session::get('cart');

        if(isset($cart['products'][$product['id']])){
            $cart['products'][$product['id']]['quantity'] += 1;
        }else{
            $cart['products'][$product['id']] = $product;
            $cart['products'][$product['id']]['quantity'] = 1;
        }

        Session::put('cart' , $cart);

    }

    public function cleanCart(){

        Session::forget('cart');

        return 'Carrito borrado';

    }

    public function removeCart($id){

        $cart = Session::get('cart');

        if( $cart['products'][$id]['quantity'] == 1){
            unset($cart['products'][$id]);
        }else{
            $cart['products'][$id]['quantity'] -= 1;  
        }  

        Session::put('cart' , $cart);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
