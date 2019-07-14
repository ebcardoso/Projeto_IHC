<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Model\GrupoVinculoModel;
use App\Model\GrupoModel;
use App\Model\UsersModel;
use App\Model\NotificacaoModel;
use App\User;

class GrupoController extends Controller {

    private $grupo;
    private $grupovinculo;
    private $users;
    
    public function __construct(GrupoVinculoModel $grupovinculo, GrupoModel $grupo, User $users) {
        $this->middleware('auth');
        $this->grupovinculo = $grupovinculo;
        $this->grupo = $grupo;
        $this->users = $users;
    }

    public function getresponsavel($id) {
        $usr = User::find($id);
        $id_resp = $usr->id_responsavel;

        $usr2 = User::find($id_resp);
        return $usr2->name;
    }

    function show($id) {

    }

    function index() {
        $n_grupo = count(
            $this->grupovinculo
                    ->select('grupovinculo.id')
                    ->join('users', 'grupovinculo.id_user', '=', 'users.id')
                    ->where('users.id', Auth::user()->id)
                    ->where('ativo', 1)
                    ->get()
        );

        if ($n_grupo == 0) {
            return redirect()->route('grupo.create');
        } else {
            $title = 'Dieta da Família';
            $titulo_secao = 'Minha Família';

            $familia = $this->grupovinculo
                                ->select('grupo.nome as nome')
                                ->join('users', 'grupovinculo.id_user', '=', 'users.id')
                                ->join('grupo', 'grupovinculo.id_grupo', '=', 'grupo.id')
                                ->where('users.id', Auth::user()->id)
                                ->where('grupovinculo.ativo', 1)
                                ->where('grupo.ativo', 1)
                                ->get();
            $nome_familia = $familia[0]->nome;

            $membros = $this->users
                                ->select('users.id as id',
                                         'users.name as name',
                                         'users.idade as idade',
                                         'users.responsavel as responsavel',
                                         'users.nome_responsavel2 as nome_responsavel2'
                                )
                                ->whereIn('users.id',
                                          $this->grupovinculo
                                                 ->select('id_user')
                                                 ->get()
                                )
                                ->orderBy('users.name')
                                ->get();

            foreach($membros as $mm) {
                $mm->respp = "";
                if ($mm->id_responsavel > 0) {
                    $mm->respp = getresponsavel($id_responsavel);
                }
            }

            $status_aux =  $this->grupovinculo
                                    ->select('grupovinculo.status as status')
                                    ->where('grupovinculo.id_user', Auth::user()->id)
                                    ->get();
            $status_membro = $status_aux[0]->status;
                                    
            return view('app_grupo.index', compact('title', 
                                                   'titulo_secao',
                                                   'nome_familia', 
                                                   'membros', 
                                                   'status_membro'));
        }
    }

    function create() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Novo Grupo";

        return view('app_grupo.create', compact('titulo', 'titulo_secao'));
    }

    function store(Request $request) {
        $dataForm = $request->except(['_token']);

        $g = new GrupoModel;
        $g->nome = $dataForm['nome'];
        $g->ativo = $dataForm['ativo'];
        $save = $g->save();

        $gv = new GrupoVinculoModel;
        $gv->id_user = Auth::user()->id;
        $gv->id_grupo = $g->id;
        $gv->ativo = 1;
        $gv->status = 1;
        $save2 = $gv->save();

        if ($save) {
            return redirect()->route('grupo.index');
        } else {
            return redirect()->route('grupo.create')->with(["errors" => "Falha ao Cadastrar"]);
        }
    }

    function convidar() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Convidar Membro";

        $familia = $this->grupovinculo
                            ->select('grupo.nome as nome')
                            ->join('users', 'grupovinculo.id_user', '=', 'users.id')
                            ->join('grupo', 'grupovinculo.id_grupo', '=', 'grupo.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('grupovinculo.ativo', 1)
                            ->where('grupo.ativo', 1)
                            ->get();
        $nome_familia = $familia[0]->nome;

        return view('app_grupo.convidar', compact('titulo', 'titulo_secao', 'nome_familia'));
    }

    function convitesave(Request $request) {
        $dataForm = $request->except(['_token']);

        $id_d = $this->users
                        ->select('users.id as id')
                        ->where('users.email', '=', $dataForm['email'])
                        ->get();
        $id_destino = $id_d[0]->id;

        $familia = $this->grupovinculo
                            ->select('grupo.nome as nome')
                            ->join('users', 'grupovinculo.id_user', '=', 'users.id')
                            ->join('grupo', 'grupovinculo.id_grupo', '=', 'grupo.id')
                            ->where('users.id', Auth::user()->id)
                            ->where('grupovinculo.ativo', 1)
                            ->where('grupo.ativo', 1)
                            ->get();
        $nome_familia = $familia[0]->nome;
        
        $nt = new NotificacaoModel;
        $nt->id_origem = Auth::user()->id;
        $nt->id_destino = $id_destino;
        $nt->ativo = 1; //1 pq a pessoa ainda não respondeu
        $nt->tipo = 1; //ingresso em grupo
        $nt->descri = 'Você foi convidade para ingressar na Família '.$nome_familia;
        
        $save = $nt->save();

        return redirect()->route('grupo.index');
    }
}