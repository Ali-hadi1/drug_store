<?php

namespace App\Http\Controllers;

use App\Models\province;
use Illuminate\Http\Request;

class provinceController extends Controller
{
    public function index(){
        return response()->json(province::all('id', 'en_name'));
    }
}
