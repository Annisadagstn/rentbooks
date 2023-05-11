<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    public function indexLogin(){
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $p = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
 
        //$user = $request->only('name', 'password');
        if(Auth::attempt($p)){
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect('user');
            }
            return redirect()->intended('/');
        }

      
    }

    public function storeRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'role_id' => 2,
        ]);
        return redirect('/login')->with('success', 'Registrasi berhasil! , silahkan Login');
    }

    
}