<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_at'
        'finish_at'
        'started_at'
        'atendente_id'
        'chamada_id'
    ];

    protected $table = 'atendimento';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    public function chamada() 
    {
        return $this->belongsTo(Chamada:class)
    }

    public function atendente() 
    {
        return $this->belongsTo(Atendente:class)
    }

}