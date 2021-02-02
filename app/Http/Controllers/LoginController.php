<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('authentication.login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
        if(Auth::user()->role == 'admin')
        {
           return redirect()->route('admin');
        }
            return redirect()->route('display');
            // ->with('status','invalid login detalis');
        }


        
        else {
            return redirect()->route('display');
        }
    }
}
