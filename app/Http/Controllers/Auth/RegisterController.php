<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(UserRegisterRequest $Register){
        $user =  User::create($Register->validated());
        $user->profile()->create();
    }
}
