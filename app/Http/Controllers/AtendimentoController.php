<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimento;

class AtendimentoController extends Controller
{
    public function list()
    {
        return view('atendimento.lista', [
            'atendimentos' => Atendimento::all()
        ]);
    }


    public function finalizar_atendimento($idAtendimento)
    {
        $atendimento = Atendimento::find($idAtendimento);
        $atendimento->finish_at = date("Y-m-d");
        $atendimento->save();
        return view('atendimento.lista', [
            'atendimentos' => Atendimento::all()
        ]);
    }

}

