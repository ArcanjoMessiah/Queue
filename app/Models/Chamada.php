<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    use HasFactory;

     protected $fillable = [
        'origem'
    ];

    protected $table = 'chamada';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function atendimentos() 
    {
        return $this->hasMany(Atendimento::class);
    }
}

