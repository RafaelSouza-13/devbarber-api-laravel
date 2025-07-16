<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
        $data = $request->validated();
        $token = auth()->attempt([
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        if(!$token){
            return response()->json([
                'success' => false,
                'message' => "Credenciais inválidas",
            ], 401);
        }
        $user = auth()->user();
        $data['user']['name'] = $user->name;
        $data['user']['email'] = $user->email;
        $data['user']['avatar'] = url('media/avatars'.$user->avatar);
        $data['token'] = $token;
        return response()->json($data, 200);
    }

    public function logout(){
        auth()->logout();
        return response()->json(['message' => 'logout realizado com sucesso'], 200);
    }

    public function refresh(){
        $data['token'] = auth()->refresh();
        return response()->json($data, 200);
    }

    public function unauthorized(){
        return response()->json(['error' => 'Não autorizado'], 401);
    }
}
