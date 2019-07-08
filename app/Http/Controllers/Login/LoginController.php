<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    function index() {
        $title = 'Dieta da Família';
        return view('login', compact('title'));
    }

    function criar() {
        $title = 'Dieta da Família';
        return view('registro', compact('title'));
    }
}
