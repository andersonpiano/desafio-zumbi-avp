@extends('layouts.template')
@section('title', 'Gerenciamento de Recursos')
@section('content')
<?php 
if(!isset($id)){
    $id = ""; 
    
  }
?>  
<div class="container">
<a href="{{route('recursos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Adicionar</a>
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr class="text-center">
          <th>ID</th>
          <th>Descrição</th>
          <th>Quantidade</th>
          <th>Observação</th>
          <th>Imagem</th>
          <th>Ações</th>
        </tr>
      </thead>
      @foreach($recursos as $recurso)
      <tbody>
        <tr>
            <td>{{$recurso->id}}</td>
            <td>{{$recurso->descricao}}</td>
            <td>{{$recurso->quantidade}}</td>
            <td>{{$recurso->observacao}}</td>
            <td></td>
            <td>
                <a title="ver" href="{{route('recursos.ver', $recurso)}}"><i class="fas fa-eye text-primary mr-1"></i></a>
                <a title="editar" href="{{route('recursos.edit', $recurso)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                <a title="remover" href="{{route('recursos.modal', $recurso)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
            </td>
        </tr>
      @endforeach
      
      </tbody>
  </table>
  {{$recursos->links()}}
</div>
</div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('recursos.delete', $id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>
@endsection