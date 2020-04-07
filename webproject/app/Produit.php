<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'id','nameproduct', 'description', 'categid','typeid','image1' ,'prix' ,'Matiere',
    ];

    public function getCategorie()
    {
        return $this->belongsTo(Categorie::class,'categid');
    }

    public function getType()
    {
        return $this->belongsTo(Type::class,'typeid');
    }

   
}



