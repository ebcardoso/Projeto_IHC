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
        $total_segunda = 0;
        foreach($segunda as $c) {
            $total_segunda = $total_segunda + $c->calorias;
        }

        $terca = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 2)
                            ->orderBy('exercicio.nome')
                            ->get();
        $total_terca = 0;
        foreach($terca as $c) {
            $total_terca = $total_terca + $c->calorias;
        }
        //dd($terca);

        $quarta = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 3)
                            ->orderBy('exercicio.nome')
                            ->get();
        $total_quarta = 0;
        foreach($quarta as $c) {
            $total_quarta = $total_quarta + $c->calorias;
        }

        $quinta = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 4)
                            ->orderBy('exercicio.nome')
                            ->get();
        $total_quinta = 0;
        foreach($quinta as $c) {
            $total_quinta = $total_quinta + $c->calorias;
        }

        $sexta = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 5)
                            ->orderBy('exercicio.nome')
                            ->get();
        $total_sexta = 0;
        foreach($sexta as $c) {
            $total_sexta = $total_sexta + $c->calorias;
        }

        $sabado = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 6)
                            ->orderBy('exercicio.nome')
                            ->get();
        $total_sabado = 0;
        foreach($sabado as $c) {
            $total_sabado = $total_sabado + $c->calorias;
        }

        $domingo = $this->evm
                            ->select('exercicio.nome as nome', 'exerciciovinculo.id as id', 'exercicio.calorias as calorias', 'exerciciovinculo.dia as dia')
                            ->join('users',     'exerciciovinculo.id_user', '=', 'users.id')
                            ->join('exercicio', 'exerciciovinculo.id_exercicio', '=', 'exercicio.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('exerciciovinculo.dia', 7)
                            ->orderBy('exercicio.nome')
                            ->get();
        $total_domingo = 0;
        foreach($domingo as $c) {
            $total_domingo = $total_domingo + $c->calorias;
        }

        $exercicios = $this->em
                            ->select('exercicio.id',
                                     'exercicio.nome as nome',
                                     'exercicio.calorias as calorias'
                                    )
                            ->orderBy('exercicio.nome')
                            ->get();

        return view("app04_exercicios.inicial", compact("titulo", "titulo_secao", "exercicios",
                                                        "segunda", "terca", "quarta",
                                                        "quinta", "sexta", "sabado", "domingo",
                                                        "total_segunda", "total_terca", "total_quarta",
                                                        "total_quinta", "total_sexta", "total_sabado",
                                                        "total_domingo"));
    }

    public function excluir($id) {
        $ex = $this->evm->find($id);
        $delete = $ex->delete();

        return redirect()->route('exercicios.inicial');
    }

    public function newexer(Request $request) {
        $dataForm = $request->except(['_token']);
        
        $e = new ExerciciosVinculoModel;
            $e->id_user = Auth::user()->id;
            $e->id_exercicio = $dataForm['id_exercicio'];
            $e->dia = $dataForm['dia'];
            $e->ativo = 1;
        $e->save();

        return redirect()->route('exercicios.inicial');
    }
}