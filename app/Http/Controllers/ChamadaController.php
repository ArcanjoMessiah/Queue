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
}
