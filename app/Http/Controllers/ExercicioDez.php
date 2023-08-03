<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDez extends Controller
{
    public function impar() 
    { $numeros = [];
         for ($i = 0; $i <= 80; $i++)
          { if ($i % 2 ==1) array_push($numeros, $i); 
        }  return json_encode([ 'valores'=> $numeros ]); }
}
