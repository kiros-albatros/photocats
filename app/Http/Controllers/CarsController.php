<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car; //подключим Модель
use App\Owner; //подключим Модель

class CarsController extends Controller
{
    public function getInfo()
    {
       //$carItem = Car::find(1)->carInfoFromOwner->name;
      // $carItem = Owner::find(2)->carInfoFromOwner;
       /* $carItems = Owner::find(1)->carInfoFromOwner;     Один ко многим
        foreach ($carItems as $carItem) {
            var_dump($carItem->color);
        }*/
        $carItems = Car::find(1);//Один ко многим (обратная)


            echo $carItems->ownerInfoFromCar;



     // return $carItems;
    }
}
