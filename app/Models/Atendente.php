<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    protected $table = 'atendente';
    protected $primaryKey = 'id';
    public $timestamps = false;

public function atendimentos() 
    {
        return $this->hasMany(Atendimento::class);
    }


}


