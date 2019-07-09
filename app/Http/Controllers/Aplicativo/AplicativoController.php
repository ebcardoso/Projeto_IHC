<?php

namespace App\Http\Controllers\Aplicativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AplicativoController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    function index() {
        $title = 'Dieta da Família';
        $titulo_secao = 'Dieta da Família';
        return view('app.index', compact('title', 'titulo_secao'));
    }

    function perfil() {
        
    }
}
