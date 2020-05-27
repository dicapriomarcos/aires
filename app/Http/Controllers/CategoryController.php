<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories')->with('categories' , $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        if(isset($id)){
            $category = Category::find($id);
            return view('admin.create_category')->with('category' , $category);
        }

        return view('admin.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Request()->has('category_id')){
            
            $category = Category::find($request->category_id);
            $category->name = $request->input('name');
            $update = $category->save();

            if($update){
                return redirect()->route('admin.categories')->with('success' , 'La Categoría se ha guardado correctamente');
            }else{
                return back()->with('error' , 'No se ha podido guardar la categoría');
            }
        }else{
            $category = new Category;
            $category->name = $request->input('name');
            $save = $category->save();
            if($save){
                return redirect()->route('admin.categories')->with('success' , 'La Categoría se ha creado correctamente');
            }else{
                return back()->with('error' , 'No se ha podido crear la categoría');
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
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::find($request->input('category_id'));
        $delete = $category->delete();
        if($delete){
            return back()->with('success' , 'La Categoría se ha Eliminado Correctamente');
        }else{
            return back()->with('error' , 'Ha ocurrido un error al eliminar la categoría');
        }
    }
}
