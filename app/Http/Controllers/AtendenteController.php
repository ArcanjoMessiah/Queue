<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendente;

class AtendenteController extends Controller
{
    public function list()
    {
        return view('atendente.lista', [
            'atendentes' => Atendente::all()
        ]);
    }


    public function create()
    {
        return view('atendente.create');
      

    }
   

    public function store(Request $request)
    {   
        $atendente = Atendente::create($request->all());
        $atendente->save();
        return view('atendente.lista', [
            'atendentes' => Atendente::all(),
            'cadastro' => true
        ]);
    }
}
