<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriaController extends Controller
{
  public function create()
  {
    return view('categoria.create');
  }

  public function index()
  {
    $categoria = [
      "Ação",
      "Terror",
      "Herói"
    ];
    return view('categoria.index', compact('categoria'));
  }
}
