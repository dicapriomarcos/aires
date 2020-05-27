<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderGenerated;
use App\Mail\newOrder;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $day = date(NOW());


        //echo $day; die();

        $orders = Order::whereDate('created_at', '=', date('Y-m-d'))->orderBy('id' , 'desc')->get();

        

        return view('admin.orders')->with('orders' , $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin($id)
    {
        $order = Order::find($id);



        return view('admin.admin_orders')->with('order', $order);
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

    public function success(){

        //echo url()->previous(); die();

        if( url()->previous() == url('checkout') || url()->previous() == url('pay/stripe') || url()->previous() == url('pay/bizum') ){

            $order = Session::get('order');
            //var_dump($order); die();
            $user = Auth::user();

            Mail::to('pedidos@airesburgerbar.com')->send(new OrderGenerated($order));
            Mail::to(Auth::user()->email)->send(new newOrder($order));
            
            //Session()->forget('cart');
            return view('order.success');  
        } else {
  
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOrderStatus()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {

        $order = Order::find($request->input('id'));
        $order->status = $request->input('status');
        $order = $order->save();

        return redirect()->route('index.orders');
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
