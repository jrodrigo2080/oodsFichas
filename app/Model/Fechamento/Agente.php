<?php

namespace App\Model\Fechamento;

use Illuminate\Database\Eloquent\Model;
use App\Http;

class Agente extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'tipoAgente',
        'telefone',
        'cpf',
        'endereco',
        'cidade',
        'uf',
    ];


}
