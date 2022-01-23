<?php

namespace App\Model\Fechamento;

use Illuminate\Database\Eloquent\Model;

class AgentesClube extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'agente_id',
        'clube_id',
        'porcentagem'
    ];

    public function agentesClubes(){
        return $this->hasMany(Agente::class);
    }
}
