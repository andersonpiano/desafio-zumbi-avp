<?php

namespace App\Http\Controllers;

use App\Models\estoque;
use App\Models\recurso;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index() {
        $estoques = estoque::orderby('id', 'desc')->paginate();   
        return view('admin.estoque.index',['estoques' => $estoques]);
    }

    public function inserir() {
        $options = recurso::select('id','descricao')->get();
        
        return view('admin.estoque.inserir',compact('options'));
    }

    public function insert(Request $request){
        $estoque = new estoque();
        
        $estoque->data = date("Y-m-d H:i:s");
        $estoque->recurso_id = $request->recurso_id;
        $estoque->recurso_descricao = recurso::find($request->recurso_id)->descricao;
        $estoque->tipo = $request->tipo;
        $estoque->quantidade = $request->quantidade;
        $estoque->responsavel = $request->responsavel;
        
        $recurso = recurso::find($request->recurso_id);
        if ($estoque->tipo == 'E'){
            $recurso->quantidade = $recurso->quantidade + $request->quantidade;
        } else {
            $recurso->quantidade = $recurso->quantidade - $request->quantidade;
        }

        if($recurso->quantidade >= 0){
            $estoque->save();
            $recurso->save();
        }
        
        return redirect()->route('estoque');
    }
    
}
