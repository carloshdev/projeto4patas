<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $primaryKey = 'id_animal';

    protected $fillable = [
        'name','breed','gender'
    ];
}
