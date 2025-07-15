<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create(UserRequest $request){
        $data = $request->validated();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        $token = auth()->attempt([
            'email' => $user->email,
            'password' => $data['password']
        ]);

        if(!$token){
            return response()->json([
                'success' => false,
                'message' => "Erro ao gerar token",
            ], 500);
        }

        $data['user']['name'] = $user->name;
        $data['user']['email'] = $user->email;
        $data['user']['avatar'] = url('media/avatars'.$user->avatar);
        $data['token'] = $token;
        return response()->json($data, 201);
    }
}
