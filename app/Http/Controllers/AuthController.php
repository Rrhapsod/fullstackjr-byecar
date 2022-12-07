<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials))
            abort(401, 'Credenciais Inválidas');


        $token = $request->user()->createToken("auth_token");

        return response()
            ->json([
                'data' => [
                    'token' => $token->plainTextToken
                ]
            ]);
    }


    public function register(Request $request, User $user)
    {
        $userData = $request->only('name', 'email', 'password');
        $userData['password'] = bcrypt($userData['password']);

        if (!$user = $user->create($userData))
            abort(500, "Erro criando um novo usuário");

        return response()
            ->json([
                "data" => [
                    "user" => $user
                ]
            ]);
    }
}
