<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'iduser','fisrtname', 'lastname', 'email','password','phone','governorate','delegation','address','zipcode',
    ];
}
