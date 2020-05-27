<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();

        return view('admin.products')->with('categories' , $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {   
        
        $categories = Category::all();

        if(isset($id)){
            $product = Product::find($id);
            return view('admin.create_product')->with('product' , $product)->with('categories' , $categories );
        }

        

        return view('admin.create_product')->with('categories' , $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Request()->has('product_id')){  
            $product = Product::find($request->product_id);
            $update = true;
        } else {
            $product = new Product;    
        }
        
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->price2 = $request->input('price2');
        $product->state = ($request->input('state')) ? 'active' : 'paused';
        $product->category_id = $request->input('category_id');
        
        if( isset($update) ){
            $save = $product->save();
            if($save) {
               return redirect()->route('admin.products')->with('success' , 'El Producto se ha guardado correctamente'); 
            }else{
                return back()->with('error' , 'No se ha podido guardar el producto');
            }
        }else{
            $save = $product->save();
            if($save){
                return redirect()->route('admin.products')->with('success' , 'El producto se ha creado correctamente');
            }else{
                return back()->with('error' , 'No se ha podido crear el Producto');
            }
        }
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
    public function destroy(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $delete = $product->delete();
        if($delete){
            return back()->with('success' , 'El producto se ha Eliminado Correctamente');
        }else{
            return back()->with('error' , 'Ha ocurrido un error al eliminar el producto');
        }
    }
}
