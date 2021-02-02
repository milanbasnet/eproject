<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
    return view('authentication.register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'number'=>'required|max:255',
            'password'=>'required',
        ]);

        $store= new User();
        $store->name=$request->input('name');
        $store->email=$request->input('email');
        $store->number=$request->input('number');
        $store->role='user';
        $store->password= Hash::make($request->input('password'));
        $store->save();

        Auth()->attempt($request->only('email','password'));
        return redirect()->route('display');
    }
    
}

