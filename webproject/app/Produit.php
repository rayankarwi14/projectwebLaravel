<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'id','nameproduct', 'description', 'categid','typeid','matierePrixId',
    ];
}



