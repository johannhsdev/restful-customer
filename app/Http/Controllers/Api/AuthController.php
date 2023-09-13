<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $rules =[
           'email' => 'required|string|email|max:100',
           'password' => 'required|string',
        ];

        $validator = \Validator::make($request->input(),$rules);
        if ( $validator->fails() ) {
            return response()->json([

                'status' => false,
                'errors' => $validator->errors()->all()

            ], 400);

        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([

                'status' => false,
                'errors' => ['Unauthorized']

            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([

            'status' => true,
            'message' => 'Usuario Logueado',
            'data' => $user,
            'token'=> $user->createToken('API TOKEN')->plainTextToken

        ], 200);

    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json([

            'status' => true,
            'message' => 'Haz cerrado sesion'

        ], 200);
    }


}
