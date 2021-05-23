@extends('layouts.template')
@section('title', 'Gerenciamento de Estoque')
@section('content')
<?php 
if(!isset($id)){
    $id = ""; 
    
  }
?>  
<div class="container">
<a href="{{route('estoque.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Registrar Entrada/Saida</a>
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr class="text-center">
          <th>Data</th>
          <th>Horário</th>
          <th>Recurso</th>
          <th>Tipo</th>
          <th>Quantidade</th>
          <th>Responsavel</th>
        </tr>
      </thead>
      @foreach($estoques as $estoque)
      <tbody>
        <tr class="text-center"<?php
        if($estoque->tipo == 'E') { 
           echo 'style="color:green;"';
          } else{
            echo 'style="color:red;"';
          }?>>
            <td><?php echo date('d/m/Y', strtotime($estoque->data)); ?></td>
            <td><?php echo date('H:i:s', strtotime($estoque->data)); ?></td>
            <td>{{$estoque->recurso_descricao}}</td>
            <td><?php echo($estoque->tipo == 'E' ? "Entrada" : "Saida"); ?></td>
            <td>{{$estoque->quantidade}}</td>
            <td>{{$estoque->responsavel}}</td>
        </tr>
      @endforeach
      
      </tbody>
  </table>
  {{$estoques->links()}}
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
        <form method="POST" action="">
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