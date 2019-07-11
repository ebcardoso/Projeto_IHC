<?php

namespace App\Http\Controllers\Aplicativo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResponsavelController extends Controller {
    public function atribuir(Request $request) {
        $dataForm = $request->except(['_token']);

        dd($dataForm['id_user'].' '.$dataForm['id_responsavel']);
    }
}