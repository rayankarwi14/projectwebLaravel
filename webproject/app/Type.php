<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    
    protected $fillable = [
        'idtype','nametype',
    ];
    public function getProduitType()
    {
        return $this->hasMany(Produit::class);
    }

}
