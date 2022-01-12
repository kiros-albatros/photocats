<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * Получить пользователя, владеющего данной машиной.
     */
    public function ownerInfoFromCar()
    {
        return $this->belongsTo('App\Owner', 'owner_id');
    }
}
