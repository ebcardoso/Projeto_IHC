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

        $usr = User::find($id_user);
            $usr->responsavel = $id_responsavel;
        $update = $usr->save();

        $notif_1 = new NotificacaoModel;
            $notif_1->descri = 'Um membro da sua família está responsável por você!';
            $notif_1->tipo   = 7;
            $notif_1->ativo  = 1;
            $notif_1->id_origem = Auth::user()->id;
            $notif_1->id_destino = $id_user;
        $notif_1->save();

        $notif_2 = new NotificacaoModel;
            $notif_2->descri = 'Você está responsável por um membro da sua família!';
            $notif_2->tipo   = 7;
            $notif_2->ativo  = 1;
            $notif_2->id_origem = Auth::user()->id;
            $notif_2->id_destino = $id_responsavel;
        $notif_2->save();

        return redirect()->route('grupo.index');
    }
}