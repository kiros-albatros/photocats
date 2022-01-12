<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function carInfoFromOwner() {
        //return $this->hasOne('App\Car');
        return $this->hasMany('App\Car');
    }
}
