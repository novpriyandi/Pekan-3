<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form() {
    	view ('index');
    }

    public function finish() {
    	view ('finish');
    }
}
