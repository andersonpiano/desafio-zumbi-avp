@extends('layouts.template')
@section('title', 'Inserir recurso')
@section('content')
<div class="container mt-4">
<form method="post" action="{{route('recursos.inserir_tabela')}}">
@csrf

<div class="row">
            <div class="col-md-9">
                <div class="form-group">
                  <label for="descricao">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="quantidade">Quantidade</label>
                  <input type="number" class="form-control" id="quantidade" name="quantidade">
                </div>
            </div>
        </div>
  <div class="form-group">
    <label for="observacao">Observação</label>
    <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
@endsection