<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(UserLoginRequest $userLoginRequest){

    $user = User::where('email', $userLoginRequest->email)->first();

    if (! $user || ! Hash::check($userLoginRequest->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    $token = $user->createToken('makeStrogToken')->plainTextToken;
    return response()->json([
        'token' => $token,
        'email' =>$user->email,
        ]);
    }
}
