<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//directing, attaching
class letterController extends Controller
{
    public function index(){
        return view('wecome');
    }
}
