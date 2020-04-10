<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
    'idcontact','suject','email','message','iduser', 
  ];
  public function getUserCont()
  {   
    return $this->belongsTo(User::class,'iduser');
  }
}
