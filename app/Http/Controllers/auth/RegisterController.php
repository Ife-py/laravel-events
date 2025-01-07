<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(){
        return view("auth.register");
    }

    public function store(Request $request){
        $request->validate([
            'username'=>'required|min:6|unique:users,name',
            'email'=>'required|unique:users,email',
            'password'=> 'required|min:6|confirmed',
        ]);

        User::create([
            'name'=>str_replace('','', $request->username),
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
}
