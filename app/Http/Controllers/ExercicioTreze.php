<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTreze extends Controller
{
    public function divisiveis (){

        $numeros = [];

        for ($i = 1000; $i <= 1999; $i++) {
            if ($i % 11 == 5) array_push($numeros, $i);
    }
   
    return json_encode([
        'valores'=> $numeros
    ]);
}
}
