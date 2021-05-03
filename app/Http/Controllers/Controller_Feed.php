<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Feed extends Controller
{
    public function feed(){

        return view('pages/feed');
    }
}
