<?php

namespace App\Http\Controllers\Aplicativo;

use App\Http\Controllers\Controller;
use App\Model\MetaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MetaController extends Controller {
    
    private $meta;    
    public function __construct(MetaModel $meta) {
        $this->middleware('auth');
        $this->meta = $meta;
    }

    public function inicial() {
        $titulo = 'Dieta da Família';
        $titulo_secao = 'Minhas Metas';

        $metas = $this->meta
                        ->select('*')
                        ->where('meta.id_user', Auth::user()->id)
                        ->orderBy('meta.id', 'desc')
                        ->limit(5)
                        ->get();
        return view('app03_meta.inicial', compact('titulo', 'titulo_secao', 'metas'));
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
            $meta->status     = 0; //0-Em Andamento | 1-Em Avaliação | 2-Aprovada | 3-Recusada
        $meta->save();
        
        return redirect()->route('meta.inicial');
    }

    public function encerrar($id) {
        $m = $this->meta::find($id);
            $m->status = 1; //0-Em Andamento | 1-Em Avaliação | 2-Aprovada | 3-Recusada
        $update = $m->save();

        if ($update) {
            return redirect()->route('meta.inicial');
        }
    }
}