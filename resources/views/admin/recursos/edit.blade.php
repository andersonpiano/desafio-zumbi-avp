@extends('layouts.template')
@section('title', 'Editar recurso')
@section('content')
<div class="container mt-4">
<form method="POST" action="{{route('recursos.editar', $recurso)}}">
@csrf
@method('put')
<div class="row">
            <div class="col-md-9">
                <div class="form-group">
                  <label for="descricao">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" value="{{$recurso->descricao}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="quantidade">Quantidade</label>
                  <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{$recurso->quantidade}}">
                </div>
            </div>
        </div>
  <div class="form-group">
    <label for="observacao">Observação</label>
    <textarea class="form-control" id="observacao" name="observacao" rows="3">{{$recurso->observacao}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
@endsection