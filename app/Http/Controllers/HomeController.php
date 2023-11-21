<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home.php');
        //retun "Retornando do metodo invoke de HomeController.
    }
}
