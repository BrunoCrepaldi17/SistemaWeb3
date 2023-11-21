<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teste;

class TesteController extends Controller
{
   public function index()
   {
      // enviando os registros (objetos) para a view
      $objetos = Teste::all();
      return view('teste.index', compact('objetos'));

      /* Mostra todos os registros
      foreach (teste::all() as $teste) {
          echo $teste->descricao . "<br/>";
      }*/
   }

   public function create()
   {
      return view('teste.create');
   }

   public function store(Request $request)
   {
      // descricao é a coluna no BD
      // nome é o campo de texto na interface create

      // primeira forma
      /*$obj = new Teste();
      $obj->descricao = $request->descricao;
      $obj->save();
 
      // segunda forma
      $obj = Teste::create(['descricao' => $request->descricao]);
*/

      // terceira forma
      $obj = Teste::create($request->all());

      //return "registro {$obj->id} salvo com sucesso: {$obj->descricao}";
      return redirect('/teste/index');
   }

   public function destroy(Request $request){
      $obj = Teste::find ($request->id);
      $obj->delete();

      $request->session()->flash("mensagem", "Exclusao realizada com sucesso: {$obj->descricao}");
      return redirect("/teste/index");
   }
}
