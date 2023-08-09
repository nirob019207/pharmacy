<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect(){
        return view('admin.dashboard');

    }
}
