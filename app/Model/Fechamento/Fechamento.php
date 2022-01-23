<?php

namespace App\Model\Fechamento;

use Illuminate\Database\Eloquent\Model;

class Fechamento extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'agente',
        'clube',
        'tipoFechamento',
        'porcentagem',
        'dataFechamento',
        'rake_cash',
        'rake_mtt',
        'rake_uniao',
        'total_rake',
        'resultado_cash',
        'resultado_mtt',
        'resultado_uniao',
        'total_resultado',
        'resultado',
        'rake_total',
        'rack_back',
        'comissao',
        'final'
    ];

}
