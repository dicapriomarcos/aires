<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Site;
use App\Product;
use App\Category;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $site = Site::find(1);

        return view('index')->with('site', $site);
    }

    public function carta(){


        return view('carta.index');
    }

    public function app()
    {
        $categories = Category::where('status' , '=' , 'active' )->get();
        $site = Site::find(1);

        return view('app-home')->with('categories' , $categories)->with('site', $site);
    }

    public function admin(){

        $site = Site::find(1);

        return view('admin.index')->with('site' , $site);
    }

    public function status(Request $request){

        $site = Site::find(1);
        $site->open = $request->input('status');
        $site->save();
        $site = Site::find(1);
        return back()->with('site' , $site);
    }

    public function checkout(){

        $this->middleware('auth');
        $this->middleware('verified');

        $cart = Session::get('cart');

        if( !isset($cart) || count( $cart) == 0 ){
            return redirect('/');
        }

        return view('cart.checkout')->with('cart' , $cart);
    }

}
