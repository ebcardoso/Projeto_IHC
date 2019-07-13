<?php

namespace App\Http\Controllers\Aplicativo;

use App\Http\Controllers\Controller;
use App\Model\ExerciciosModel;
use App\Model\ExerciciosVinculoModel;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExerciciosController extends Controller {
    protected $users;
    protected $em;
    protected $evm;
    public function __construct(User $users, ExerciciosModel $em, ExerciciosVinculoModel $evm) {
        $this->middleware('auth');
        $this->users = $users;
        $this->em = $em;
        $this->evm = $evm;
    }
    
    function inicial() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Rotina de Exercícios";

        //pegar exercícios feitos em cada dia da semana
        $segunda = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 1)
                            ->orderBy('exercicio.nome')
                            ->get();
        $terca = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 2)
                            ->orderBy('exercicio.nome')
                            ->get();
        $quarta = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 3)
                            ->orderBy('exercicio.nome')
                            ->get();
        $quinta = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 4)
                            ->orderBy('exercicio.nome')
                            ->get();
        $sexta = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 5)
                            ->orderBy('exercicio.nome')
                            ->get();
        $sabado = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 6)
                            ->orderBy('exercicio.nome')
                            ->get();
        $domingo = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 7)
                            ->orderBy('exercicio.nome')
                            ->get();

        return view("app04_exercicios.inicial", compact("titulo", "titulo_secao",
                                                        "segunda", "terca", "quarta",
                                                        "quinta", "sexta", "sabado", "domingo"));
    }

    public function excluir($id) {
        dd($id);
    }
}
