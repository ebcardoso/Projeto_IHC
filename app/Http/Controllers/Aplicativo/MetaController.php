<?php

namespace App\Http\Controllers\Aplicativo;

use App\Http\Controllers\Controller;
use App\Model\MetaModel;
use App\Model\NotificacaoModel;
use App\Model\GrupoVinculoModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MetaController extends Controller {
    
    private $meta;    
    private $users;
    public function __construct(MetaModel $meta,
                                User $users,
                                GrupoVinculoModel $grupovinculo,
                                NotificacaoModel $notificacao) {
        $this->middleware('auth');
        $this->meta = $meta;
        $this->users = $users;
        $this->grupovinculo = $grupovinculo;
        $this->notificacao = $notificacao;
    }

    public function inicial() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Minhas Metas';

        $familia = $this->grupovinculo
                                ->select('grupo.nome as nome')
                                ->join('users', 'grupovinculo.id_user', '=', 'users.id')
                                ->join('grupo', 'grupovinculo.id_grupo', '=', 'grupo.id')
                                ->where('users.id', Auth::user()->id)
                                ->where('grupovinculo.ativo', 1)
                                ->where('grupo.ativo', 1)
                                ->get();
        $n_familia = 0;
        foreach($familia as $f) {
            $n_familia = $n_familia + 1;
        }

        $metas = $this->meta
                        ->select('*')
                        ->where('meta.id_user', Auth::user()->id)
                        ->orderBy('meta.id', 'desc')
                        ->limit(5)
                        ->get();
        return view('app03_meta.inicial', compact('titulo', 'titulo_secao', 'metas', 'n_familia'));
    }

    public function criar() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Nova Meta";

        return view("app03_meta.criar", compact("titulo", "titulo_secao"));
    }

    public function inserir_bd(Request $request) {
        $dataForm = $request->except(['_token']);

        $meta = new MetaModel;
            $meta->id_user    = Auth::user()->id;
            $meta->tipo       = $dataForm['tipo'];
            $meta->descricao  = $dataForm['descricao'];
            $meta->dias       = $dataForm['dias'];
            $meta->a_perder   = $dataForm['a_perder'];
            $meta->recompensa = $dataForm['recompensa'];
            $meta->votos_sim  = 0;
            $meta->votos_nao  = 0;
            $meta->status     = 0; //0-Em Andamento | 1-Em Avaliação | 2-Aprovada | 3-Recusada
        $meta->save();
        
        return redirect()->route('meta.inicial');
    }

    public function encerrar($id) {
        $desc_meta = "";
        $m = $this->meta::find($id);
            $m->status = 1; //0-Em Andamento | 1-Em Avaliação | 2-Aprovada | 3-Recusada
            $desc_meta = $m->descricao;
        $update = $m->save();

        $usr = $this->users::find(Auth::user()->id);

        $membros = $this->users
                            ->select('users.id as id',
                                        'users.name as name',
                                        'users.idade as idade',
                                        'users.responsavel as responsavel'
                            )
                            ->whereIn('users.id',
                                        $this->grupovinculo
                                                ->select('id_user')
                                                ->get()
                            )
                            ->orderBy('users.name')
                            ->get();

        foreach($membros as $f) {
            if ($f->id != Auth::user()->id) {
                $notif_1 = new NotificacaoModel;
                    $notif_1->descri = $usr->name.' cumpriu mesmo a meta *'.$desc_meta.'* ?';
                    $notif_1->tipo   = 11;
                    $notif_1->ativo  = 1;
                    $notif_1->id_meta = $id;
                    $notif_1->id_origem = Auth::user()->id;
                    $notif_1->id_destino = $f->id;
                $notif_1->save();
            }
        }

        if ($update) {
            return redirect()->route('meta.inicial');
        }
    }

    public function votarsim($id) {
        $notif = $this->notificacao::find($id);
            $notif->tipo = 12;
            $meta = $notif->id_meta;
        $update = $notif->save();

        $mt = $this->meta::find($meta);
            $mt->votos_sim = $mt->votos_sim + 1;
        $update2 = $mt->save();

        return redirect()->route('notificacao.index');
    }

    public function votarnao($id) {
        $notif = $this->notificacao::find($id);
            $notif->tipo = 13;
            $meta = $notif->id_meta;
        $update = $notif->save();

        $mt = $this->meta::find($meta);
            $mt->votos_nao = $mt->votos_nao + 1;
        $update2 = $mt->save();

        return redirect()->route('notificacao.index');
    }
}