<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
  protected $fillable = [
    'idcommande','statuscommande','datecommande','iduser', 
  ];

  public  function getUserComm()
  {   
    return $this->belongsTo(User::class,'iduser');
  }
 

}

