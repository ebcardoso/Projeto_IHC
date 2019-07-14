<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\NotificacaoModel;
use App\Model\GrupoVinculoModel;

class NotController extends Controller {
    private $notificacao;
    public function __construct(NotificacaoModel $notificacao) {
        $this->middleware('auth');
        $this->notificacao = $notificacao;
    }

    public function index() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Notificações";

        $notifs = $this->notificacao
                            ->select('notificacao.descri',
                                     'users.name as autor',
                                     'notificacao.id as id',
                                     'notificacao.tipo as tipo',
                                     'notificacao.id_grupo as id_grupo')
                            ->join('users', 'notificacao.id_origem', '=', 'users.id')
                            ->where('notificacao.id_destino', Auth::user()->id)
                            ->where('notificacao.ativo', 1)
                            ->orderby('notificacao.id', 'DESC')
                 ->get();

        return view('app_notif.index', compact('notifs', 'titulo_secao', 'titulo'));
    }

    public function aceitar($id_n) {
        $usr = $this->notificacao::find($id_n);
            $usr->tipo = 5;
            $id_gp = $usr->id_grupo;
        $update = $usr->save();

        $gv = new GrupoVinculoModel;
            $gv->id_user  = Auth::user()->id;
            $gv->id_grupo = $id_gp;
            $gv->ativo    = 1;
            $gv->status   = 0; //0-Normal | 1-ADM
        $gv->save();

        return redirect()->route('notificacao.index');
    }

    public function recusar($id_n) {
        $usr = $this->notificacao::find($id_n);
            $usr->tipo = 6;
        $update = $usr->save();

        return redirect()->route('notificacao.index');
    }
}
