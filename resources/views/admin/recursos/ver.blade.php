@extends('layouts.template')
@section('title', 'recurso')
@section('content')
<?php
$estoque = number_format($recurso->quantidade, 2, ',', '.');
?>

<div class="card" style="width: 18rem;">
  <div class="card-header text-center">
  <?php echo $recurso->descricao; ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Estoque: <?php echo $estoque; ?></li>
    <li class="list-group-item">Descrição: <?php echo $recurso->observacao; ?></li>
  </ul>
</div>
@endsection