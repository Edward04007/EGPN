<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Index extends Controller
{
    public function index(){

        return view('pages/index');
    }
}
