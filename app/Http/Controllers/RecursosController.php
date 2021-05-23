<?php

namespace App\Http\Controllers;

use App\Models\recurso;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
    public function index() {
        $recursos = recurso::orderby('id', 'desc')->paginate();
        return view('admin.recursos.index',['recursos' => $recursos]);
    }

    public function inserir() {
        return view('admin.recursos.inserir');
    }

    public function insert(Request $request){
        $recurso = new recurso();
        $recurso->descricao = $request->descricao;
        $recurso->quantidade = $request->quantidade;
        $recurso->observacao = $request->observacao;
        $recurso->save();
        return redirect()->route('recursos');
    }

    public function ver($id){
        $recurso = recurso::find($id);
        return view('admin.recursos.ver', ['recurso' => $recurso]);
    }

    public function edit(recurso $recurso){
        return view('admin.recursos.edit', ['recurso' => $recurso]);   
     }
 
 
    public function editar(Request $request, recurso $recurso){
        $recurso->descricao = $request->descricao;
        $recurso->quantidade = $request->quantidade;
        $recurso->observacao = $request->observacao;
        $recurso->save();
        return redirect()->route('recursos');
    }
    public function delete(recurso $recurso){
        $recurso->delete();
        return redirect()->route('recursos');
    }

    public function modal($id){
        $recursos = recurso::orderby('id', 'desc')->paginate();
        return view('admin.recursos.index', ['recursos' => $recursos, 'id' => $id]);

     }
}
