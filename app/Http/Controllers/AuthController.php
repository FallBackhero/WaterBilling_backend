<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(LoginUserRequest $request)
    {
        $request ->validated($request->all());

            if(!Auth::attempt($request->only('email','password'))){
                    return $this->error('','Credentials does not match', 401);
            }

            $user = User::where('email', $request->email)->first();
            
            return $this->success([
                'user' => $user,
                'token' => $user->createToken('Api Token of ' . $user->user_type)->plainTextToken
            ]); 
    }

    public function register(StoreUserRequest $request)
    {
        $request->validated($request->all());

        $user = User::create([
            'user_type' => $request->user_type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $this->success([
            'user'=> $user,
            'token' => $user->createToken('Api Token of ' . $user->user_type)->plainTextToken
        ]);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
       
        return $this->success([
            'message' => 'You hace successfully been logged out and your tokn has been deleted'
        ]);
    }
}
