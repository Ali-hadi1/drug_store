<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list(){
        dd(User::all());
        return response()->json(User::all());
    }
}
