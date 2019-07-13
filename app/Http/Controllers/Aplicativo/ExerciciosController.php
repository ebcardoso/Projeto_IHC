<?php

namespace App\Http\Controllers\Aplicativo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExerciciosController extends Controller {
    function inicial() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Rotina de Exercícios";

        return view("app04_exercicios.inicial", compact("titulo", "titulo_secao"));
    }
}
