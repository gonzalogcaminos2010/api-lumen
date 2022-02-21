<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            return response()->json([
                'token'=> $request->user()->createToken('$request->name')->plainTextToken,
                'message'=>'Login Successfully'
            ]);
        }

        return response()->json([
            'message'=>'Login Failed'
        ],401); //401 Unauthorized

    }    



public function validateLogin(Request $request){
    
    return $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'name' => 'required'
        
    ]);
}

}