<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GPSController extends Controller
{
    public function recalculandoRota() {
   $mensagem = "O GPS está recalculando a rota";
   return  $mensagem;
}

}
