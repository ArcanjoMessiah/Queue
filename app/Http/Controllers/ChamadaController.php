<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamada;

class ChamadaController extends Controller
{
    public function list()
    {
        return view('chamada', [
            'chamadas' => Chamada::all()
        ]);
    }

    public function create()
    {
        return view('chamada.create');
    }


    public function store(Request $request)
    {
        $chamada = Chamada::create($request->all());
        $chamada->save();
        return view('chamada.lista', [
            'chamadas' => Chamada::all(),
            'cadastro' => true
        ]);
    }
}
