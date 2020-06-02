<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index(){
        
        $user = User::findOrFail(Auth::user()->id);

        return view('user.index')->with('user' , $user);
    }

    public function store(Request $request){

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $save = $user->save();

        if($save){
            return back()->with('message' , 'Se han guardado los datos correctamente');
        }else{
            return back()->with('error' , 'Ocurrio un error al guardar los datos');
        }

        
    }
}
