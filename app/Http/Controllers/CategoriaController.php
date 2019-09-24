<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() // =Função Listar.
    {
        $categorias = \App\Categoria::get();
        
        return view('categoria.index', compact('categorias'));
        
    }
    public function create(){
        return view('categoria.create');
    }
    
     public function store(Request $request){
       
        $categoria = new \App\Categoria();
        $categoria->nomcat = $request->get('nomcat');
        $categoria->save();
        
        return "true";
                
    }
     public function destroy($codcat){
         $categoria = \App\Categoria:: find($codcat); // find = busca no banco de dados e faz o que se pede
         $categoria->delete();
        return "true";
     }
     public function edit($codcat){
         $categoria = \App\Categoria:: find($codcat);  // find = busca no banco de dados e faz o que se pede
         
         return view('categoria.edit', compact('categoria')); // COMPACT passa as variaveis para a view.
     }
     public function update(Request $request, $codcat){
       
        $categoria = \App\Categoria::find($codcat);  // find = busca no banco de dados e faz o que se pede
        $categoria->nomcat = $request->get('nomcat');
        $categoria->save();
        
        return redirect('/categoria')->with('alterada', 'Categoria alterada com sucesso !!!');
                
    }
}
