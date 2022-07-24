<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterControlller extends Controller
{
    public function index() {
        return view('pages.register');
    }
}
