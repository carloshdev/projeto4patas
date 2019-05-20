<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome','duracao','responsavelAtual'
    ];
}
