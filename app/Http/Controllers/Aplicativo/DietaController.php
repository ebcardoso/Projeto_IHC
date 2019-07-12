<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\UsuarioDietaModel;
use App\Model\AlimentoModel;

class DietaController extends Controller {

    private $users;    
    private $udm;    
    private $alt;    
    public function __construct(User $users, UsuarioDietaModel $udm, AlimentoModel $alt) {
        $this->middleware('auth');
        $this->users = $users;
        $this->udm = $udm;
        $this->alt = $alt;
    }

    public function inicial() {
        $usr_dieta = $this->users
                            ->select('users.preencheu_dieta as preencheu_dieta',
                                     'users.calorias_cafe as calorias_cafe',
                                     'users.calorias_almoco as calorias_almoco',
                                     'users.calorias_janta as calorias_janta'
                                    )
                            ->where('users.id', Auth::user()->id)
                            ->get();

        $ca1 = $this->udm
                        ->select('alimento.calorias as calorias')
                        ->join('users',    'usuariodieta.id_user',     '=', 'users.id')
                        ->join('alimento', 'usuariodieta.id_alimento', '=', 'alimento.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('alimento.tipo', 1)
                        ->get();
        $cal_cafe = 0;
        foreach($ca1 as $c) {
            $cal_cafe = $cal_cafe + $c->calorias;
        }

        $ca2 = $this->udm
                        ->select('alimento.calorias as calorias')
                        ->join('users',    'usuariodieta.id_user',     '=', 'users.id')
                        ->join('alimento', 'usuariodieta.id_alimento', '=', 'alimento.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('alimento.tipo', 2)
                        ->get();
        $cal_almoco = 0;
        foreach($ca2 as $c) {
            $cal_almoco = $cal_almoco + $c->calorias;
        }

        $ca3 = $this->udm
                        ->select('alimento.calorias as calorias')
                        ->join('users',    'usuariodieta.id_user',     '=', 'users.id')
                        ->join('alimento', 'usuariodieta.id_alimento', '=', 'alimento.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('alimento.tipo', 3)
                        ->get();
        $cal_janta = 0;
        foreach($ca3 as $c) {
            $cal_janta = $cal_janta + $c->calorias;
        }
                        
        $preencheu       = $usr_dieta[0]->preencheu_dieta;
        $calorias_cafe   = $usr_dieta[0]->calorias_cafe;
        $calorias_almoco = $usr_dieta[0]->calorias_almoco;
        $calorias_janta  = $usr_dieta[0]->calorias_janta;

        if ($preencheu == 1) {
            $titulo = 'Dieta da Família';
            $titulo_secao = 'Minha Dieta';

            return view('app02_dieta.inicial', compact('titulo',
                                                       'titulo_secao',
                                                       'calorias_cafe',
                                                       'calorias_almoco', 
                                                       'calorias_janta',
                                                       'cal_cafe',
                                                       'cal_almoco', 
                                                       'cal_janta'));
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
            $usr->calorias_cafe   = $dataForm['cafe'];
            $usr->calorias_almoco = $dataForm['almoco'];
            $usr->calorias_janta  = $dataForm['janta'];
            $usr->preencheu_dieta = 1;
        $update = $usr->save();

        if ($update) {
            return redirect()->route('dieta.inicial');
        }
    }

    public function cafe() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Dieta do Café da Manhã';

        //pegar informações sobre a dieta no café
        $usr_dieta = $this->users
                            ->select('users.calorias_cafe as calorias_cafe')
                            ->where('users.id', Auth::user()->id)
                            ->get();
        $calorias_cafe = $usr_dieta[0]->calorias_cafe;

        //pegar alimentos consumidos no café
        $ca1 = $this->udm
                        ->select('alimento.nome as nome',
                                 'alimento.calorias as calorias',
                                 'usuariodieta.id as id'
                                )
                        ->join('users',    'usuariodieta.id_user',     '=', 'users.id')
                        ->join('alimento', 'usuariodieta.id_alimento', '=', 'alimento.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('alimento.tipo', 1)
                        ->orderBy('alimento.nome')
                        ->get();
        
        //número de calorias consumidas no café
        $cal_cafe = 0;
        foreach($ca1 as $c) {
            $cal_cafe = $cal_cafe + $c->calorias;
        }

        return view('app02_dieta.dieta_cafe', compact('titulo', 'titulo_secao', 'cal_cafe', 'calorias_cafe', 'ca1'));
    }

    public function almoco() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Dieta do Almoço';

        //pegar informações sobre a dieta no café
        $usr_dieta = $this->users
                            ->select('users.calorias_almoco as calorias_almoco')
                            ->where('users.id', Auth::user()->id)
                            ->get();
        $calorias_almoco = $usr_dieta[0]->calorias_almoco;

        //pegar alimentos consumidos no café
        $ca2 = $this->udm
                        ->select('alimento.nome as nome',
                                 'alimento.calorias as calorias',
                                 'usuariodieta.id as id'
                                )
                        ->join('users',    'usuariodieta.id_user',     '=', 'users.id')
                        ->join('alimento', 'usuariodieta.id_alimento', '=', 'alimento.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('alimento.tipo', 2)
                        ->orderBy('alimento.nome')
                        ->get();
        
        //número de calorias consumidas no café
        $cal_almoco = 0;
        foreach($ca2 as $c) {
            $cal_almoco = $cal_almoco + $c->calorias;
        }

        return view('app02_dieta.dieta_almoco', compact('titulo', 'titulo_secao', 'cal_almoco', 'calorias_almoco', 'ca2'));
    }

    public function janta() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Dieta da Janta';

        //pegar informações sobre a dieta no café
        $usr_dieta = $this->users
                            ->select('users.calorias_janta as calorias_janta')
                            ->where('users.id', Auth::user()->id)
                            ->get();
        $calorias_janta = $usr_dieta[0]->calorias_janta;

        //pegar alimentos consumidos no café
        $ca3 = $this->udm
                        ->select('alimento.nome as nome',
                                 'alimento.calorias as calorias',
                                 'usuariodieta.id as id'
                                )
                        ->join('users',    'usuariodieta.id_user',     '=', 'users.id')
                        ->join('alimento', 'usuariodieta.id_alimento', '=', 'alimento.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('alimento.tipo', 3)
                        ->orderBy('alimento.nome')
                        ->get();
        
        //número de calorias consumidas no café
        $cal_janta = 0;
        foreach($ca3 as $c) {
            $cal_janta = $cal_janta + $c->calorias;
        }

        return view('app02_dieta.dieta_janta', compact('titulo', 'titulo_secao', 'cal_janta', 'calorias_janta', 'ca3'));
    }

    public function cafe_excluir($id) {
        $dt = $this->udm->find($id);
        $delete = $dt->delete();

        return redirect()->route('dieta.cafe');
    }

    public function almoco_excluir($id) {
        $dt = $this->udm->find($id);
        $delete = $dt->delete();

        return redirect()->route('dieta.almoco');
    }

    public function janta_excluir($id) {
        $dt = $this->udm->find($id);
        $delete = $dt->delete();

        return redirect()->route('dieta.janta');
    }
}