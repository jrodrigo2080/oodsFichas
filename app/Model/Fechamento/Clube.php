<?php

namespace App\Model\Fechamento;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome','codigo','logo'
    ];
}
