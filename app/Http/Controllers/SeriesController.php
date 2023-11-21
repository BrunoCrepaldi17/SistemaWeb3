<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

  public function create()
    {
      return view('series.create');  
    } 

  public function index(){
    $series = [
        "lost",
        "grey's anatomy",
        "agents of SHIELD"
    ];

    
/*
    $html = "<ul>";
    foreach($series as $serie){
        $html .= "<li>$serie</li>";
    }
   $html .= "</ul>";
*/

//chamando a view e passando uma variavel
   return view('series.index', compact('series'));
  
  }
}
