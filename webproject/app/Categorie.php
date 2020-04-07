<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'idcateg','namecateg',
    ];
    public function getProduitCateg()
    {
        return $this->hasMany(Produit::class);
    }
}
