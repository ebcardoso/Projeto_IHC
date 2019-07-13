<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiarioController extends Controller {
    public function inicial() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Meu Diário';

        return view('app05_diario.inicial', compact('titulo', 'titulo_secao'));
    }
}