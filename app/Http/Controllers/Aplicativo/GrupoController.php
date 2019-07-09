<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Grupo;

class GrupoController extends Controller {

    private $marca;
    public function __construct(Grupo $grupo) {
        $this->middleware('auth');
        $this->grupo = $grupo;
    }

    function index () {
        $n_grupo = count(Grupo::all());

        $title = 'Dieta da Família';
        $titulo_secao = 'Minha Família';
        return view('app.index', compact('title', 'titulo_secao'));
    }
}