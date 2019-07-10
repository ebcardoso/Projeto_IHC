<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\NotificacaoModel;

class NotController extends Controller {
    public function __construct(NotificacaoModel $notificacao) {
        $this->middleware('auth');
        $this->notificacao = $notificacao;
    }

    public function index() {
        $titulo = "Dieta da Família";
        $titulo_secao = "Notificações";

        $notifs = $this->notificacao
                            ->select('notificacao.descri', 'users.name as autor', 'notificacao.id as id', 'notificacao.tipo as tipo')
                            ->join('users', 'notificacao.id_origem', '=', 'users.id')
                            ->where('notificacao.id_destino', Auth::user()->id)
                            ->where('notificacao.ativo', 1)
                 ->get();

        return view('app_notif.index', compact('notifs', 'titulo_secao', 'titulo'));
    }
}
