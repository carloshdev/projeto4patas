<?php

namespace Projeto4Patas;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome','duracao','responsavelAtual'
    ];
}
