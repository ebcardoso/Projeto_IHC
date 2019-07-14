<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\NotificacaoModel;
use App\User;

class ResponsavelController extends Controller {
    public function atribuir(Request $request) {
        $dataForm = $request->except(['_token']);
        $id_user = $dataForm['id_user'];
        $id_responsavel = $dataForm['id_responsavel'];

        $usr_responsavel = User::find($id_responsavel);
            $nome_resp = $usr_responsavel->name;
        $update = $usr_responsavel->save();

        $usr = User::find($id_user);
            $nomme = $usr->name;
            $usr->responsavel = $id_responsavel;
            $usr->nome_responsavel2 = $nome_resp;
        $update = $usr->save();

        $notif_1 = new NotificacaoModel;
            $notif_1->descri = $nome_resp.' está responsável por você!';
            $notif_1->tipo   = 7;
            $notif_1->ativo  = 1;
            $notif_1->id_origem = Auth::user()->id;
            $notif_1->id_destino = $id_user;
        $notif_1->save();

        $notif_2 = new NotificacaoModel;
            $notif_2->descri = 'Você está responsável por '. $nomme;
            $notif_2->tipo   = 7;
            $notif_2->ativo  = 1;
            $notif_2->id_origem = Auth::user()->id;
            $notif_2->id_destino = $id_responsavel;
        $notif_2->save();

        return redirect()->route('grupo.index');
    }
}