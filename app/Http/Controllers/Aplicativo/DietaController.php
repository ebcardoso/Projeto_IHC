<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class DietaController extends Controller {

    private $users;    
    public function __construct(User $users) {
        $this->middleware('auth');
        $this->users = $users;
    }

    public function inicial() {
        $usr_dieta = $this->users
                            ->select('users.preencheu_dieta as preencheu_dieta')
                            ->where('users.id', Auth::user()->id)
                            ->get();
        $preencheu = $usr_dieta[0]->preencheu_dieta;

        if ($preencheu == 1) {
            dd("deu certo");
        } else {
            return redirect()->route('dieta.inserircalorias');
        }
    }

    public function inserircalorias() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Definir Calorias da Dieta';

        return view('app02_dieta.inserircalorias', compact('titulo', 'titulo_secao'));
    }

    public function setcalorias(Request $request) {
        $dataForm = $request->except(['_token']);

        $usr = $this->users::find(Auth::user()->id);
            $usr->calorias_cafe = $dataForm['cafe'];
            $usr->calorias_almoco = $dataForm['almoco'];
            $usr->calorias_janta = $dataForm['janta'];
            $usr->preencheu_dieta = 1;
        $update = $usr->save();

        if ($update) {
            return redirect()->route('dieta.inicial');
        }
    }
}